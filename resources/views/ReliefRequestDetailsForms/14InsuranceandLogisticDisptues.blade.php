@if($ReliefRequests ==null)

<form  name="reliefrequest_form" id="reliefrequest_form" method="POST" >
  @csrf  
  <div class="row register-form">
    <div class="col-md-12">

      <div class="row">
        <div class="col-md-12"> 
          <div class="form-group text-center" style="margin-bottom: 1.4em; color:red; font-size: 15px;">
            <label><b>Please fill in the applicable details  pertaining to the dispute</b></label>
          </div>
          <div class="form-group text-center" style="margin-bottom: 1.4em !important;">
            <label><u><b>Nature of  Relief</b></u></label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4"> 
          <div class="form-group">
           <input type="text" onkeypress="return isNumberKey(event)"  id="claim_for_refund_of_fare_or_freight"   class="form-control{{ $errors->has('claim_for_refund_of_fare_or_freight') ? ' is-invalid' : '' }}" name="claim_for_refund_of_fare_or_freight" >
           <label class="form-control-placeholder" for="claim_for_refund_of_fare_or_freight">Claim for Refund of Fare or Freight({{$claimantinformations[0]->currency}}): </label>
           @if ($errors->has('claim_for_refund_of_fare_or_freight'))
           <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('claim_for_refund_of_fare_or_freight') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="col-md-4"> 
        <div class="form-group">
          <input type="text" onkeypress="return isNumberKey(event)"  id="claim_for_refund_of_fare_or_freight_interest" class="form-control{{ $errors->has('claim_for_refund_of_fare_or_freight_interest') ? ' is-invalid' : '' }}" name="claim_for_refund_of_fare_or_freight_interest"  >
          <label class="form-control-placeholder" for="claim_for_refund_of_fare_or_freight_interest">Interest (%):</label>
          @if ($errors->has('claim_for_refund_of_fare_or_freight_interest'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('claim_for_refund_of_fare_or_freight_interest') }}</strong>
          </span>
          @endif
        </div>
      </div>

      <div class="col-md-4"> 
        <div class="form-group">
         <label class="form-control-placeholder" for="claim_for_refund_of_fare_or_freight_withoutinterest" style="margin-left: 18px">Without Interest</label>
         <input type="checkbox" class="form-control check-size" id="claim_for_refund_of_fare_or_freight_withoutinterest"  name="claim_for_refund_of_fare_or_freight_withoutinterest" style="width:7%" value="yes">
       </div>
     </div>

   </div>

     <div class="row">
        <div class="col-md-4"> 
          <div class="form-group">
           <input type="text" onkeypress="return isNumberKey(event)"  id="claim_for_payment_of_freight"   class="form-control{{ $errors->has('claim_for_payment_of_freight') ? ' is-invalid' : '' }}" name="claim_for_payment_of_freight" >
           <label class="form-control-placeholder" for="claim_for_payment_of_freight">Claim for Payment of Freight({{$claimantinformations[0]->currency}}): </label>
           @if ($errors->has('claim_for_payment_of_freight'))
           <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('claim_for_payment_of_freight') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="col-md-4"> 
        <div class="form-group">
          <input type="text" onkeypress="return isNumberKey(event)"  id="claim_for_payment_of_freight_interest" class="form-control{{ $errors->has('claim_for_payment_of_freight_interest') ? ' is-invalid' : '' }}" name="claim_for_payment_of_freight_interest" >
          <label class="form-control-placeholder" for="claim_for_payment_of_freight_interest">Interest (%):</label>
          @if ($errors->has('claim_for_payment_of_freight_interest'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('claim_for_payment_of_freight_interest') }}</strong>
          </span>
          @endif
        </div>
      </div>

      <div class="col-md-4"> 
        <div class="form-group">
         <label class="form-control-placeholder" for="claim_for_payment_of_freight_withoutinterest" style="margin-left: 18px">Without Interest</label>
         <input type="checkbox" class="form-control check-size" id="claim_for_payment_of_freight_withoutinterest"  name="claim_for_payment_of_freight_withoutinterest" style="width:7%"  value="yes">
       </div>
     </div>
   </div>

            <div class="row">
        <div class="col-md-4"> 
          <div class="form-group">
           <input type="text" onkeypress="return isNumberKey(event)"  id="claim_for_payment_of_damages"   class="form-control{{ $errors->has('claim_for_payment_of_damages') ? ' is-invalid' : '' }}" name="claim_for_payment_of_damages" >
           <label class="form-control-placeholder" for="claim_for_payment_of_damages">Claim for Payment of Damages({{$claimantinformations[0]->currency}}): </label>
           @if ($errors->has('claim_for_payment_of_damages'))
           <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('claim_for_payment_of_damages') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="col-md-4"> 
        <div class="form-group">
          <input type="text" onkeypress="return isNumberKey(event)"  id="claim_for_payment_of_damages_interest" class="form-control{{ $errors->has('claim_for_payment_of_damages_interest') ? ' is-invalid' : '' }}" name="claim_for_payment_of_damages_interest"  >
          <label class="form-control-placeholder" for="claim_for_payment_of_damages_interest">Interest (%): </label>
          @if ($errors->has('claim_for_payment_of_damages_interest'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('claim_for_payment_of_damages_interest') }}</strong>
          </span>
          @endif
        </div>
      </div>

      <div class="col-md-4"> 
        <div class="form-group">
         <label class="form-control-placeholder" for="claim_for_payment_of_damages_withoutinterest" style="margin-left: 18px">Without Interest</label>
         <input type="checkbox" class="form-control check-size" id="claim_for_payment_of_damages_withoutinterest"  name="claim_for_payment_of_damages_withoutinterest" style="width:7%" value="yes" >
       </div>
     </div>
   </div>

            <div class="row">
        <div class="col-md-4"> 
          <div class="form-group">
           <input type="text" onkeypress="return isNumberKey(event)"  id="claim_for_demurrages"   class="form-control{{ $errors->has('claim_for_demurrages') ? ' is-invalid' : '' }}" name="claim_for_demurrages" >
           <label class="form-control-placeholder" for="claim_for_demurrages">Claim for Demurrages({{$claimantinformations[0]->currency}}): </label>
           @if ($errors->has('claim_for_demurrages'))
           <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('claim_for_demurrages') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="col-md-4"> 
        <div class="form-group">
          <input type="text" onkeypress="return isNumberKey(event)"  id="claim_for_demurrages_interest" class="form-control{{ $errors->has('claim_for_demurrages_interest') ? ' is-invalid' : '' }}" name="claim_for_demurrages_interest"  >
          <label class="form-control-placeholder" for="claim_for_demurrages_interest">Interest (%): </label>
          @if ($errors->has('claim_for_demurrages_interest'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('claim_for_demurrages_interest') }}</strong>
          </span>
          @endif
        </div>
      </div>

      <div class="col-md-4"> 
        <div class="form-group">
         <label class="form-control-placeholder" for="claim_for_demurrages_withoutinterest" style="margin-left: 18px">Without Interest</label>
         <input type="checkbox" class="form-control check-size" id="claim_for_demurrages_withoutinterest"  name="claim_for_demurrages_withoutinterest" style="width:7%" value="yes">
       </div>
     </div>
   </div>
   <div class="row">
       <div class="col-md-4"> 
      <div class="form-group">
        <input type="text" onkeypress="return isNumberKey(event)"  id="demanding_policy_claim_amount"  class="form-control{{ $errors->has('demanding_policy_claim_amount') ? ' is-invalid' : '' }}" name="demanding_policy_claim_amount" >
        <label class="form-control-placeholder" for="demanding_policy_claim_amount">Demanding  Policy Claim Amount({{$claimantinformations[0]->currency}}): </label>
        @if ($errors->has('demanding_policy_claim_amount'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('demanding_policy_claim_amount') }}</strong>
        </span> 
        @endif
      </div>
    </div>
     <div class="col-md-4"> 
        <div class="form-group">
          <input type="text" onkeypress="return isNumberKey(event)"  id="demanding_policy_claim_amount_interest" class="form-control{{ $errors->has('demanding_policy_claim_amount_interest') ? ' is-invalid' : '' }}" name="demanding_policy_claim_amount_interest"  >
          <label class="form-control-placeholder" for="demanding_policy_claim_amount_interest">Interest (%): </label>
          @if ($errors->has('demanding_policy_claim_amount_interest'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('demanding_policy_claim_amount_interest') }}</strong>
          </span>
          @endif
        </div>
      </div>

      <div class="col-md-4"> 
        <div class="form-group">
         <label class="form-control-placeholder" for="demanding_policy_claim_amount_withoutinterest" style="margin-left: 18px">Without Interest</label>
         <input type="checkbox" class="form-control check-size" id="demanding_policy_claim_amount_withoutinterest"  name="demanding_policy_claim_amount_withoutinterest" style="width:7%"  value="yes">
       </div>
     </div>
   </div>
<div class="row">
    <div class="col-md-4"> 
      <div class="form-group">
        <input type="text" onkeypress="return isNumberKey(event)"  id="demanding_surrender_value_amount"  class="form-control{{ $errors->has('demanding_surrender_value_amount') ? ' is-invalid' : '' }}" name="demanding_surrender_value_amount" >
        <label class="form-control-placeholder" for="demanding_surrender_value_amount">Demanding Surrender Value Amount({{$claimantinformations[0]->currency}}): </label>
        @if ($errors->has('demanding_surrender_value_amount'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('demanding_surrender_value_amount') }}</strong>
        </span> 
        @endif
      </div>
    </div>
    <div class="col-md-4"> 
        <div class="form-group">
          <input type="text" onkeypress="return isNumberKey(event)"  id="demanding_surrender_value_amount_interest" class="form-control{{ $errors->has('demanding_surrender_value_amount_interest') ? ' is-invalid' : '' }}" name="demanding_surrender_value_amount_interest"  >
          <label class="form-control-placeholder" for="demanding_surrender_value_amount_interest">Interest (%): </label>
          @if ($errors->has('demanding_surrender_value_amount_interest'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('demanding_surrender_value_amount_interest') }}</strong>
          </span>
          @endif
        </div>
      </div>

      <div class="col-md-4"> 
        <div class="form-group">
         <label class="form-control-placeholder" for="demanding_surrender_value_amount_withoutinterest" style="margin-left: 18px">Without Interest</label>
         <input type="checkbox" class="form-control check-size" id="demanding_surrender_value_amount_withoutinterest"  name="demanding_surrender_value_amount_withoutinterest" style="width:7%"  value="yes">
       </div>
     </div>
   </div>
   <div class="row">
    <div class="col-md-3"> 
        <div class="form-group">
         <label class="form-control-placeholder" for="challenging_cancellation_of_policy" style="margin-left: 18px">Challenging Cancellation of Policy Value</label>
         <input type="checkbox" class="form-control check-size" id="challenging_cancellation_of_policy"  name="challenging_cancellation_of_policy" style="width:9%"  value="yes">
       </div>
     </div>
     <div class="col-md-3"> 
      <div class="form-group">
        <input type="text" onkeypress="return isNumberKey(event)"  id="subrogation_value"  class="form-control{{ $errors->has('subrogation_value') ? ' is-invalid' : '' }}" name="subrogation_value" >
        <label class="form-control-placeholder" for="subrogation_value">Subrogation Value({{$claimantinformations[0]->currency}}): </label>
        @if ($errors->has('subrogation_value'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('subrogation_value') }}</strong>
        </span> 
        @endif
      </div>
    </div>
    <div class="col-md-3"> 
        <div class="form-group">
          <input type="text" onkeypress="return isNumberKey(event)"  id="subrogation_value_interest" class="form-control{{ $errors->has('subrogation_value_interest') ? ' is-invalid' : '' }}" name="subrogation_value_interest"  >
          <label class="form-control-placeholder" for="subrogation_value_interest">Interest (%): </label>
          @if ($errors->has('subrogation_value_interest'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('subrogation_value_interest') }}</strong>
          </span>
          @endif
        </div>
      </div>

      <div class="col-md-3"> 
        <div class="form-group">
         <label class="form-control-placeholder" for="subrogation_value_withoutinterest" style="margin-left: 18px">Without Interest</label>
         <input type="checkbox" class="form-control check-size" id="subrogation_value_withoutinterest"  name="subrogation_value_withoutinterest" style="width:9%" value="yes">
       </div>
     </div>
    
   </div>
   
    
   
    <div class="row">
    <div class="col-md-6"> 
      <div class="form-group">
        <input type="text" onkeypress="return isNumberKey(event)"  id="damage_amount"  class="form-control{{ $errors->has('damage_amount') ? ' is-invalid' : '' }}" name="damage_amount" >
        <label class="form-control-placeholder" for="damage_amount">Value of Cargo({{$claimantinformations[0]->currency}}): </label>
        @if ($errors->has('damage_amount'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('damage_amount') }}</strong>
        </span> 
        @endif
      </div>
    </div>  
      
    <div class="col-md-6"> 
      <div class="form-group">
        <input type="text"  id="nature_and_details_of_cargo "  class="form-control{{ $errors->has('nature_and_details_of_cargo') ? ' is-invalid' : '' }}" name="nature_and_details_of_cargo" >
        <label class="form-control-placeholder" for="nature_and_details_of_cargo">Nature and Details of Cargo:
         </label>
        @if ($errors->has('nature_and_details_of_cargo'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('nature_and_details_of_cargo') }}</strong>
        </span> 
        @endif
      </div>
    </div>  
  </div>
  <div class="row">
    <div class="col-md-6"> 
      <div class="form-group">
        <input type="text"  id="claim_for_specific_performance"  class="form-control{{ $errors->has('claim_for_specific_performance') ? ' is-invalid' : '' }}" name="claim_for_specific_performance" >
        <label class="form-control-placeholder" for="claim_for_specific_performance">Claim for Specific Performance (Give Brief Details: Not More than 10 Words): </label>
        @if ($errors->has('claim_for_specific_performance'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('claim_for_specific_performance') }}</strong>
        </span> 
        @endif
      </div>
    </div> 
    <div class="col-md-6"> 
      <div class="form-group">
        <input type="text" onkeypress="return isNumberKey(event)"  id="value_performance "  class="form-control{{ $errors->has('value_performance') ? ' is-invalid' : '' }}" name="value_performance" >
        <label class="form-control-placeholder" for="value_performance">Value of Specific Performance({{$claimantinformations[0]->currency}}):
         </label>
        @if ($errors->has('value_performance'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('value_performance') }}</strong>
        </span> 
        @endif
      </div>
    </div> 
   </div> 
   <div class="row">
    <div class="col-md-4"> 
      <div class="form-group">
       <input type="text" onkeypress="return isNumberKey(event)"  id="value_claims"  class="form-control{{ $errors->has('value_claims') ? ' is-invalid' : '' }}" name="value_claims" >
       <label class="form-control-placeholder" for="value_claims">Total Value Claimed({{$claimantinformations[0]->currency}}):</label>
       @if ($errors->has('value_claims'))
       <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('value_claims') }}</strong>
      </span> 
      @endif

    </div>
  </div>
 <div class="col-md-4"> 
      <div class="form-group">
       <input type="text" onkeypress="return isNumberKey(event)"  id="value_claims_interest"  class="form-control{{ $errors->has('value_claims_interest') ? ' is-invalid' : '' }}" name="value_claims_interest" >
       <label class="form-control-placeholder" for="value_claims_interest">With Interest (%):</label>
       @if ($errors->has('value_claims_interest'))
       <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('value_claims_interest') }}</strong>
      </span> 
      @endif

    </div>
  </div>
    <div class="col-md-4"> 
  <div class="form-group">
     <label class="form-control-placeholder" for="value_claims_withoutinterest" style="margin-left: 18px">Without Interest</label>
    <input type="checkbox" class="form-control check-size" id="value_claims_withoutinterest"  name="value_claims_withoutinterest" style="width:7%" value="yes">
  </div>

</div>
   </div>
   <div class="row">
    <div class="col-md-4"> 
  <div class="form-group">
    <input type="text" onkeypress="return isNumberKey(event)"  id="interest_amount" class="form-control{{ $errors->has('interest_amount') ? ' is-invalid' : '' }}" name="interest_amount" >
    <label class="form-control-placeholder" for="interest_amount">Interest Amount({{$claimantinformations[0]->currency}}):</label>
    @if ($errors->has('interest_amount'))
    <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('interest_amount') }}</strong>
    </span>
    @endif
  </div>
</div>
<div class="col-md-4"> 
  <div class="form-group">
    <input type="text" onkeypress="return isNumberKey(event)"  id="damage_with_interest"  class="form-control{{ $errors->has('damage_with_interest') ? ' is-invalid' : '' }}" name="damage_with_interest" >
   @if ($claimantinformations[0]->currency =='INR') 
       <label class="form-control-placeholder" for="damage_with_interest">Total Relief Amount Including Interest (INR)<span style="color: red">*</span>:</label>
       @else
        <label class="form-control-placeholder" for="damage_with_interest">Total Relief Amount Including Interest (USD)<span style="color: red">*</span>:</label>
           @endif
    @if ($errors->has('damage_with_interest'))
    <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('damage_with_interest') }}</strong>
    </span>
    @endif
  </div>
</div>
   </div>
</div>
</div>
<div class="modal-footer">
  <div class="mx-auto">
    <button type="submit" id="reliefrequestsave" class="btn btn-success btn-space"  >Save</button>
    <button type="reset" class="btn btn-warning btn-space" value="Reset!">Clear</button>
    <button class="btn btn-danger btn-space" type="button" data-dismiss="modal" aria-label="Close">
     Close
   </button>
 </div> 
</div>   
</form>
@else

@foreach($ReliefRequests as $ReliefRequest)
<form  name="reliefrequest_update_form" id="reliefrequest_update_form" method="POST" >
  @csrf  
    <div class="row register-form">
    <div class="col-md-12">

      <div class="row">
        <div class="col-md-12"> 
          <!-- <div class="form-group text-center" style="margin-bottom: 1.4em; color:red; font-size: 15px;">
            <label><b>Please fill in the applicable details  pertaining to the dispute</b></label>
          </div> -->
          <div class="form-group text-center" style="margin-bottom: 1.4em !important;">
            <label><u><b>Nature of  Relief</b></u></label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4"> 
          <div class="form-group">
            <input type="text" onkeypress="return isNumberKey(event)"  name="reliefrequestid" value="{{$ReliefRequest->id}}" style="display: none">
           <input type="text" onkeypress="return isNumberKey(event)"  id="claim_for_refund_of_fare_or_freight"   class="form-control{{ $errors->has('claim_for_refund_of_fare_or_freight') ? ' is-invalid' : '' }}" name="claim_for_refund_of_fare_or_freight" value="{{ number_format((float)$ReliefRequest->claim_for_refund_of_fare_or_freight, 2, '.', '') }}" >
           <label class="form-control-placeholder" for="claim_for_refund_of_fare_or_freight">Claim for Refund of Fare or Freight({{$claimantinformations[0]->currency}}): </label>
           @if ($errors->has('claim_for_refund_of_fare_or_freight'))
           <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('claim_for_refund_of_fare_or_freight') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="col-md-4"> 
        <div class="form-group">
          <input type="text" onkeypress="return isNumberKey(event)"  id="claim_for_refund_of_fare_or_freight_interest" class="form-control{{ $errors->has('claim_for_refund_of_fare_or_freight_interest') ? ' is-invalid' : '' }}" name="claim_for_refund_of_fare_or_freight_interest"  value="{{$ReliefRequest->claim_for_refund_of_fare_or_freight_interest}}">
          <label class="form-control-placeholder" for="claim_for_refund_of_fare_or_freight_interest">Interest(%): </label>
          @if ($errors->has('claim_for_refund_of_fare_or_freight_interest'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('claim_for_refund_of_fare_or_freight_interest') }}</strong>
          </span>
          @endif
        </div>
      </div>

      <div class="col-md-4"> 
        <div class="form-group">
         <label class="form-control-placeholder" for="claim_for_refund_of_fare_or_freight_withoutinterest" style="margin-left: 18px">Without Interest</label>
         <input type="checkbox" class="form-control check-size" id="claim_for_refund_of_fare_or_freight_withoutinterest"  name="claim_for_refund_of_fare_or_freight_withoutinterest" style="width:7%" value="yes" {{ $ReliefRequest->claim_for_refund_of_fare_or_freight_withoutinterest == 'yes' ? 'checked' : ''}} >
       </div>
     </div>

   </div>

     <div class="row">
        <div class="col-md-4"> 
          <div class="form-group">
           <input type="text" onkeypress="return isNumberKey(event)"  id="claim_for_payment_of_freight"   class="form-control{{ $errors->has('claim_for_payment_of_freight') ? ' is-invalid' : '' }}" name="claim_for_payment_of_freight" value="{{ number_format((float)$ReliefRequest->claim_for_payment_of_freight, 2, '.', '') }}">
           <label class="form-control-placeholder" for="claim_for_payment_of_freight">Claim for Payment of Freight({{$claimantinformations[0]->currency}}): </label>
           @if ($errors->has('claim_for_payment_of_freight'))
           <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('claim_for_payment_of_freight') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="col-md-4"> 
        <div class="form-group">
          <input type="text" onkeypress="return isNumberKey(event)"  id="claim_for_payment_of_freight_interest" class="form-control{{ $errors->has('claim_for_payment_of_freight_interest') ? ' is-invalid' : '' }}" name="claim_for_payment_of_freight_interest"  value="{{$ReliefRequest->claim_for_payment_of_freight_interest}}">
          <label class="form-control-placeholder" for="claim_for_payment_of_freight_interest">Interest(%):</label>
          @if ($errors->has('claim_for_payment_of_freight_interest'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('claim_for_payment_of_freight_interest') }}</strong>
          </span>
          @endif
        </div>
      </div>

      <div class="col-md-4"> 
        <div class="form-group">
         <label class="form-control-placeholder" for="claim_for_payment_of_freight_withoutinterest" style="margin-left: 18px">Without Interest</label>
         <input type="checkbox" class="form-control check-size" id="claim_for_payment_of_freight_withoutinterest"  name="claim_for_payment_of_freight_withoutinterest" style="width:7%"  value="yes" {{ $ReliefRequest->claim_for_payment_of_freight_withoutinterest == 'yes' ? 'checked' : ''}}>
       </div>
     </div>
   </div>

            <div class="row">
        <div class="col-md-4"> 
          <div class="form-group">
           <input type="text" onkeypress="return isNumberKey(event)"  id="claim_for_payment_of_damages"   class="form-control{{ $errors->has('claim_for_payment_of_damages') ? ' is-invalid' : '' }}" name="claim_for_payment_of_damages" value="{{ number_format((float)$ReliefRequest->claim_for_payment_of_damages, 2, '.', '') }}">
           <label class="form-control-placeholder" for="claim_for_payment_of_damages">Claim for Payment of Damages({{$claimantinformations[0]->currency}}): </label>
           @if ($errors->has('claim_for_payment_of_damages'))
           <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('claim_for_payment_of_damages') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="col-md-4"> 
        <div class="form-group">
          <input type="text" onkeypress="return isNumberKey(event)"  id="claim_for_payment_of_damages_interest" class="form-control{{ $errors->has('claim_for_payment_of_damages_interest') ? ' is-invalid' : '' }}" name="claim_for_payment_of_damages_interest"  value="{{$ReliefRequest->claim_for_payment_of_damages_interest}}">
          <label class="form-control-placeholder" for="claim_for_payment_of_damages_interest">Interest(%): </label>
          @if ($errors->has('claim_for_payment_of_damages_interest'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('claim_for_payment_of_damages_interest') }}</strong>
          </span>
          @endif
        </div>
      </div>

      <div class="col-md-4"> 
        <div class="form-group">
         <label class="form-control-placeholder" for="claim_for_payment_of_damages_withoutinterest" style="margin-left: 18px">Without Interest</label>
         <input type="checkbox" class="form-control check-size" id="claim_for_payment_of_damages_withoutinterest"  name="claim_for_payment_of_damages_withoutinterest" style="width:7%"  value="yes" {{ $ReliefRequest->claim_for_payment_of_damages_withoutinterest == 'yes' ? 'checked' : ''}}>
       </div>
     </div>
   </div>

            <div class="row">
        <div class="col-md-4"> 
          <div class="form-group">
           <input type="text" onkeypress="return isNumberKey(event)"  id="claim_for_demurrages"   class="form-control{{ $errors->has('claim_for_demurrages') ? ' is-invalid' : '' }}" name="claim_for_demurrages" value="{{ number_format((float)$ReliefRequest->claim_for_demurrages, 2, '.', '') }}">
           <label class="form-control-placeholder" for="claim_for_demurrages">Claim for Demurrages({{$claimantinformations[0]->currency}}):</label>
           @if ($errors->has('claim_for_demurrages'))
           <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('claim_for_demurrages') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="col-md-4"> 
        <div class="form-group">
          <input type="text" onkeypress="return isNumberKey(event)"  id="claim_for_demurrages_interest" class="form-control{{ $errors->has('claim_for_demurrages_interest') ? ' is-invalid' : '' }}" name="claim_for_demurrages_interest"  value="{{$ReliefRequest->claim_for_demurrages_interest}}">
          <label class="form-control-placeholder" for="claim_for_demurrages_interest">Interest(%): </label>
          @if ($errors->has('claim_for_demurrages_interest'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('claim_for_demurrages_interest') }}</strong>
          </span>
          @endif
        </div>
      </div>

      <div class="col-md-4"> 
        <div class="form-group">
         <label class="form-control-placeholder" for="claim_for_demurrages_withoutinterest" style="margin-left: 18px">Without Interest</label>
         <input type="checkbox" class="form-control check-size" id="claim_for_demurrages_withoutinterest"  name="claim_for_demurrages_withoutinterest" style="width:7%" value="yes"  {{ $ReliefRequest->claim_for_demurrages_withoutinterest == 'yes' ? 'checked' : ''}}>
       </div>
     </div>
   </div>
      <div class="row">
       <div class="col-md-4"> 
      <div class="form-group">
        <input type="text" onkeypress="return isNumberKey(event)"  id="demanding_policy_claim_amount" class="form-control{{ $errors->has('demanding_policy_claim_amount') ? ' is-invalid' : '' }}" name="demanding_policy_claim_amount" value="{{ number_format((float)$ReliefRequest->demanding_policy_claim_amount, 2, '.', '') }}" >
        <label class="form-control-placeholder" for="demanding_policy_claim_amount">Demanding  Policy Claim Amount({{$claimantinformations[0]->currency}}):</label>
        @if ($errors->has('demanding_policy_claim_amount'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('demanding_policy_claim_amount') }}</strong>
        </span> 
        @endif
      </div>
    </div>
     <div class="col-md-4"> 
        <div class="form-group">
          <input type="text" onkeypress="return isNumberKey(event)"  id="demanding_policy_claim_amount_interest" class="form-control{{ $errors->has('demanding_policy_claim_amount_interest') ? ' is-invalid' : '' }}" name="demanding_policy_claim_amount_interest"  value="{{$ReliefRequest->demanding_policy_claim_amount_interest}}">
          <label class="form-control-placeholder" for="demanding_policy_claim_amount_interest">Interest(%): </label>
          @if ($errors->has('demanding_policy_claim_amount_interest'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('demanding_policy_claim_amount_interest') }}</strong>
          </span>
          @endif
        </div>
      </div>

      <div class="col-md-4"> 
        <div class="form-group">
         <label class="form-control-placeholder" for="demanding_policy_claim_amount_withoutinterest" style="margin-left: 18px">Without Interest</label>
         <input type="checkbox" class="form-control check-size" id="demanding_policy_claim_amount_withoutinterest"  name="demanding_policy_claim_amount_withoutinterest" style="width:7%" value="yes" {{ $ReliefRequest->demanding_policy_claim_amount_withoutinterest == 'yes' ? 'checked' : ''}}>
       </div>
     </div>
   </div>
<div class="row">
    <div class="col-md-4"> 
      <div class="form-group">
        <input type="text" onkeypress="return isNumberKey(event)"  id="demanding_surrender_value_amount"  class="form-control{{ $errors->has('demanding_surrender_value_amount') ? ' is-invalid' : '' }}" name="demanding_surrender_value_amount" value="{{ number_format((float)$ReliefRequest->demanding_surrender_value_amount, 2, '.', '') }}">
        <label class="form-control-placeholder" for="demanding_surrender_value_amount">Demanding Surrender Value Amount({{$claimantinformations[0]->currency}}): </label>
        @if ($errors->has('demanding_surrender_value_amount'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('demanding_surrender_value_amount') }}</strong>
        </span> 
        @endif
      </div>
    </div>
    <div class="col-md-4"> 
        <div class="form-group">
          <input type="text" onkeypress="return isNumberKey(event)"  id="demanding_surrender_value_amount_interest" class="form-control{{ $errors->has('demanding_surrender_value_amount_interest') ? ' is-invalid' : '' }}" name="demanding_surrender_value_amount_interest"  value="{{$ReliefRequest->demanding_surrender_value_amount_interest}}">
          <label class="form-control-placeholder" for="demanding_surrender_value_amount_interest">Interest(%): </label>
          @if ($errors->has('demanding_surrender_value_amount_interest'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('demanding_surrender_value_amount_interest') }}</strong>
          </span>
          @endif
        </div>
      </div>

      <div class="col-md-4"> 
        <div class="form-group">
         <label class="form-control-placeholder" for="demanding_surrender_value_amount_withoutinterest" style="margin-left: 18px">Without Interest</label>
         <input type="checkbox" class="form-control check-size" id="demanding_surrender_value_amount_withoutinterest"  name="demanding_surrender_value_amount_withoutinterest" style="width:7%" value="yes" {{ $ReliefRequest->demanding_surrender_value_amount_withoutinterest == 'yes' ? 'checked' : ''}} >
       </div>
     </div>
   </div>
   <div class="row">
    <div class="col-md-3"> 
        <div class="form-group">
         <label class="form-control-placeholder" for="challenging_cancellation_of_policy" style="margin-left: 18px">Challenging Cancellation of Policy Value:</label>
         <input type="checkbox" class="form-control check-size" id="challenging_cancellation_of_policy"  name="challenging_cancellation_of_policy" style="width:9%" value="yes" {{ $ReliefRequest->challenging_cancellation_of_policy == 'yes' ? 'checked' : ''}}>
       </div>
     </div>
    
      
   
  
    <div class="col-md-3"> 
      <div class="form-group">
        <input type="text" onkeypress="return isNumberKey(event)"  id="subrogation_value"  class="form-control{{ $errors->has('subrogation_value') ? ' is-invalid' : '' }}" name="subrogation_value" value="{{ number_format((float)$ReliefRequest->subrogation_value, 2, '.', '') }}">
        <label class="form-control-placeholder" for="subrogation_value">Subrogation Value({{$claimantinformations[0]->currency}}):</label>
        @if ($errors->has('subrogation_value'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('subrogation_value') }}</strong>
        </span> 
        @endif
      </div>
    </div>
    <div class="col-md-3"> 
        <div class="form-group">
          <input type="text" onkeypress="return isNumberKey(event)"  id="subrogation_value_interest" class="form-control{{ $errors->has('subrogation_value_interest') ? ' is-invalid' : '' }}" name="subrogation_value_interest"  value="{{$ReliefRequest->subrogation_value_interest}}">
          <label class="form-control-placeholder" for="subrogation_value_interest">Interest(%):</label>
          @if ($errors->has('subrogation_value_interest'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('subrogation_value_interest') }}</strong>
          </span>
          @endif
        </div>
      </div>

      <div class="col-md-3"> 
        <div class="form-group">
         <label class="form-control-placeholder" for="subrogation_value_withoutinterest" style="margin-left: 18px">Without Interest</label>
         <input type="checkbox" class="form-control check-size" id="subrogation_value_withoutinterest"  name="subrogation_value_withoutinterest" style="width:9%" value="yes" {{ $ReliefRequest->subrogation_value_withoutinterest == 'yes' ? 'checked' : ''}}>
       </div>
     </div>
   </div>
    <div class="row">
    <div class="col-md-6"> 
      <div class="form-group">
        <input type="text" onkeypress="return isNumberKey(event)"  id="damage_amount"  class="form-control{{ $errors->has('damage_amount') ? ' is-invalid' : '' }}" name="damage_amount" value="{{ number_format((float)$ReliefRequest->damage_amount, 2, '.', '') }}">
        <label class="form-control-placeholder" for="damage_amount">Value of Cargo({{$claimantinformations[0]->currency}}):</label>
        @if ($errors->has('damage_amount'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('damage_amount') }}</strong>
        </span> 
        @endif
      </div>
    </div>  
      
    <div class="col-md-6"> 
      <div class="form-group">
        <input type="text"  id="nature_and_details_of_cargo "  class="form-control{{ $errors->has('nature_and_details_of_cargo') ? ' is-invalid' : '' }}" name="nature_and_details_of_cargo" value="{{$ReliefRequest->nature_and_details_of_cargo}}">
        <label class="form-control-placeholder" for="nature_and_details_of_cargo">Nature and Details of Cargo:
         </label>
        @if ($errors->has('nature_and_details_of_cargo'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('nature_and_details_of_cargo') }}</strong>
        </span> 
        @endif
      </div>
    </div>  
  </div>
  <div class="row">
    <div class="col-md-6"> 
      <div class="form-group">
        <input type="text"  id="claim_for_specific_performance"  class="form-control{{ $errors->has('claim_for_specific_performance') ? ' is-invalid' : '' }}" name="claim_for_specific_performance" value="{{$ReliefRequest->claim_for_specific_performance}}">
        <label class="form-control-placeholder" for="claim_for_specific_performance">Claim for specific performance(Give Brief Details: Not More than 10 Words):</label>
        @if ($errors->has('claim_for_specific_performance'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('claim_for_specific_performance') }}</strong>
        </span> 
        @endif
      </div>
    </div> 
    <div class="col-md-6"> 
      <div class="form-group">
        <input type="text" onkeypress="return isNumberKey(event)"  id="value_performance "  class="form-control{{ $errors->has('value_performance') ? ' is-invalid' : '' }}" name="value_performance" value="{{ number_format((float)$ReliefRequest->value_performance, 2, '.', '') }}">
        <label class="form-control-placeholder" for="value_performance">Value of Specific Performance({{$claimantinformations[0]->currency}}):
         </label>
        @if ($errors->has('value_performance'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('value_performance') }}</strong>
        </span> 
        @endif
      </div>
    </div> 
   </div> 
   <div class="row">
    <div class="col-md-4"> 
      <div class="form-group">
       <input type="text" onkeypress="return isNumberKey(event)"  id="value_claims"  class="form-control{{ $errors->has('value_claims') ? ' is-invalid' : '' }}" name="value_claims" value="{{ number_format((float)$ReliefRequest->value_claims, 2, '.', '') }}">
       <label class="form-control-placeholder" for="value_claims">Total Value Claimed({{$claimantinformations[0]->currency}}):</label>
       @if ($errors->has('value_claims'))
       <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('value_claims') }}</strong>
      </span> 
      @endif

    </div>
  </div>
 <div class="col-md-4"> 
      <div class="form-group">
       <input type="text" onkeypress="return isNumberKey(event)"  id="value_claims_interest"  class="form-control{{ $errors->has('value_claims_interest') ? ' is-invalid' : '' }}" name="value_claims_interest" value="{{$ReliefRequest->value_claims_interest}}">
       <label class="form-control-placeholder" for="value_claims_interest">With Interest(%):</label>
       @if ($errors->has('value_claims_interest'))
       <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('value_claims_interest') }}</strong>
      </span> 
      @endif

    </div>
  </div>
    <div class="col-md-4"> 
  <div class="form-group">
     <label class="form-control-placeholder" for="value_claims_withoutinterest" style="margin-left: 18px">Without Interest</label>
    <input type="checkbox" class="form-control check-size" id="value_claims_withoutinterest"  name="value_claims_withoutinterest" style="width:7%" value="yes" {{ $ReliefRequest->value_claims_withoutinterest == 'yes' ? 'checked' : ''}}>
  </div>

</div>
   </div>
   <div class="row">
    <div class="col-md-4"> 
  <div class="form-group">
    <input type="text" onkeypress="return isNumberKey(event)"  id="interest_amount" class="form-control{{ $errors->has('interest_amount') ? ' is-invalid' : '' }}" name="interest_amount" value="{{ number_format((float)$ReliefRequest->interest_amount, 2, '.', '') }}">
    <label class="form-control-placeholder" for="interest_amount">Interest Amount({{$claimantinformations[0]->currency}}):</label>
    @if ($errors->has('interest_amount'))
    <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('interest_amount') }}</strong>
    </span>
    @endif
  </div>
</div>
<div class="col-md-4"> 
  <div class="form-group">
    <input type="text" onkeypress="return isNumberKey(event)"  id="damage_with_interest"  class="form-control{{ $errors->has('damage_with_interest') ? ' is-invalid' : '' }}" name="damage_with_interest" value="{{ number_format((float)$ReliefRequest->damage_with_interest, 2, '.', '') }}">
   @if ($claimantinformations[0]->currency =='INR') 
       <label class="form-control-placeholder" for="damage_with_interest">Total Relief Amount including Interest(INR)<span style="color: red">*</span>:</label>
       @else
        <label class="form-control-placeholder" for="damage_with_interest">Total Relief Amount including Interest(USD) <span style="color: red">*</span>:</label>
           @endif
    @if ($errors->has('damage_with_interest'))
    <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('damage_with_interest') }}</strong>
    </span>
    @endif
  </div>
</div>
   </div> 
</div>
</div>
<div class="modal-footer">
  <div class="mx-auto">
    <button type="submit" class="btn btn-success btn-space"  >Update</button>
    <button type="reset" class="btn btn-warning btn-space" value="Reset!">Clear</button>
    <button class="btn btn-danger btn-space" type="button" data-dismiss="modal" aria-label="Close">
     Close
   </button>
 </div> 
</div> 
</form>
@endforeach

@endif
<script type="text/javascript">
$('#claim_for_refund_of_fare_or_freight_withoutinterest').on('click', function () {
  if ($(this).prop('checked')) {
                document.getElementById("claim_for_refund_of_fare_or_freight_interest").disabled = true;
                //$('#demand_for_licence_fee_interest').disabled();
                $('#claim_for_refund_of_fare_or_freight_interest').val("");

            } else {
               document.getElementById("claim_for_refund_of_fare_or_freight_interest").disabled = false;
                $('#claim_for_refund_of_fare_or_freight_interest').val("");
            }
});
$('#claim_for_payment_of_freight_withoutinterest').on('click', function () {
  if ($(this).prop('checked')) {
                document.getElementById("claim_for_payment_of_freight_interest").disabled = true;
                //$('#demand_for_licence_fee_interest').disabled();
                $('#claim_for_payment_of_freight_interest').val("");

            } else {
               document.getElementById("claim_for_payment_of_freight_interest").disabled = false;
                $('#claim_for_payment_of_freight_interest').val("");
            }
});
$('#claim_for_payment_of_damages_withoutinterest').on('click', function () {claim_for_demurrages_withoutinterest
  if ($(this).prop('checked')) {
                document.getElementById("claim_for_payment_of_damages_interest").disabled = true;
                //$('#demand_for_licence_fee_interest').disabled();
                $('#claim_for_payment_of_damages_interest').val("");

            } else {
               document.getElementById("claim_for_payment_of_damages_interest").disabled = false;
                $('#claim_for_payment_of_damages_interest').val("");
            }
});
$('#claim_for_demurrages_withoutinterest').on('click', function () {
  if ($(this).prop('checked')) {
                document.getElementById("claim_for_demurrages_interest").disabled = true;
                //$('#demand_for_licence_fee_interest').disabled();
                $('#claim_for_demurrages_interest').val("");

            } else {
               document.getElementById("claim_for_demurrages_interest").disabled = false;
                $('#claim_for_demurrages_interest').val("");
            }
});
$('#demanding_policy_claim_amount_withoutinterest').on('click', function () {
  if ($(this).prop('checked')) {
                document.getElementById("demanding_policy_claim_amount_interest").disabled = true;
                //$('#demand_for_licence_fee_interest').disabled();
                $('#demanding_policy_claim_amount_interest').val("");

            } else {
               document.getElementById("demanding_policy_claim_amount_interest").disabled = false;
                $('#demanding_policy_claim_amount_interest').val("");
            }
});
$('#demanding_surrender_value_amount_withoutinterest').on('click', function () {
  if ($(this).prop('checked')) {
                document.getElementById("demanding_surrender_value_amount_interest").disabled = true;
                //$('#demand_for_licence_fee_interest').disabled();
                $('#demanding_surrender_value_amount_interest').val("");

            } else {
               document.getElementById("demanding_surrender_value_amount_interest").disabled = false;
                $('#demanding_surrender_value_amount_interest').val("");
            }
});
$('#subrogation_value_withoutinterest').on('click', function () {
  if ($(this).prop('checked')) {
                document.getElementById("subrogation_value_interest").disabled = true;
                //$('#demand_for_licence_fee_interest').disabled();
                $('#subrogation_value_interest').val("");

            } else {
               document.getElementById("subrogation_value_interest").disabled = false;
                $('#subrogation_value_interest').val("");
            }
});
$('#challenging_cancellation_of_policy_withoutinterest').on('click', function () {
  if ($(this).prop('checked')) {
                document.getElementById("challenging_cancellation_of_policy_interest").disabled = true;
                //$('#demand_for_licence_fee_interest').disabled();
                $('#challenging_cancellation_of_policy_interest').val("");

            } else {
               document.getElementById("challenging_cancellation_of_policy_interest").disabled = false;
                $('#challenging_cancellation_of_policy_interest').val("");
            }
});
$('#value_claims_withoutinterest').on('click', function () {
  if ($(this).prop('checked')) {
                document.getElementById("value_claims_interest").disabled = true;
                //$('#demand_for_licence_fee_interest').disabled();
                $('#value_claims_interest').val("");

            } else {
               document.getElementById("value_claims_interest").disabled = false;
                $('#value_claims_interest').val("");
            }
});


</script>
<SCRIPT language=Javascript>
       <!--
       function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
       //-->
    </SCRIPT>