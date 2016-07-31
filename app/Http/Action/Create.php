<?php
namespace App\Http\Action;
use App\Model\Customer;
use Validator;
use App;

class Create{

  /*
  *** creates the customer data ***
  @param string first_name (required)
  @param string last_name
  @param string email (required)
  @param string password (required)
  @param string country (required)
  @param string region (requried)
  @param string zip
  @param string phone
  @param string dob
  @param string gender
  @param longtext billing_address1 (requried)
  @param longtext billing_address2
  @param text tax_number
  @param string state
  @param longtext data  usage: data => {'key': 'value'}
  */
  public function customer_create($customer)
  {
      $rules= array(
          'first_name'          => 'required',
          'email'               => 'required|email|unique:customer',
          'password'            => 'required',
          'country'             => 'required',
          'region'              => 'required',
          'billing_address1'    => 'required'
      );

      $messages  = [
          'first_name'          => 'first name is required',
          'email'               => 'first name is required',
          'password'            => 'password is required',
          'country'             => 'country is required',
          'reqion'              => 'reqion is required',
          'billing_address1'    => 'billing address1 is required'
      ];

      $validator = Validator::make($customer, $rules,$messages);

      if($validator->fails())
      {
          $response = array('status'=>false,'message'=> $validator->errors());
          return $response;
      }

      $customer['state'] = 'active';

      Customer::create($customer);
      $response = array('status'=>true,'message'=> 'Record Successfully Saved!');
      return $response;

  }



}
