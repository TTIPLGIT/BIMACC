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
        
      </div>
    </div>

    <!-- <div class="row">
      <div class="col-md-1"><input class="form-control" placeholder='1'  type="text" disabled ></div>
      <div class="col-md-5" > 
        <div class="form-group">

          <input type="text" id="mortgaged_property"  class="form-control{{ $errors->has('mortgaged_property') ? ' is-invalid' : '' }}" name="mortgaged_property[]">
          <label class="form-control-placeholder" for="mortgaged_property">Mortgaged Property/ Pledged Property/ Hypothecated property:</label> 
          @if ($errors->has('mortgaged_property'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('mortgaged_property') }}</strong>
          </span>
          @endif 
        </div>
      </div>
      <div class="buttons" id="bankrelief_btn" >
        <span class="btn btn-icon btn-sm btn-success">
          <i class="far fa-plus-square"></i> </span>
        </div>
        <div class="col-md-5"> 
          <div class="form-group">
           <input type="text" onkeypress="return isNumberKey(event)"  id="debt_recovery" class="form-control{{ $errors->has('debt_recovery') ? ' is-invalid' : '' }}" name="debt_recovery"  >
           <label class="form-control-placeholder" for="debt_recovery">Total Aggregate Amount Including Interest and Charges:</label>
           @if ($errors->has('debt_recovery'))
           <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('debt_recovery') }}</strong>
          </span>
          @endif
        </div>
      </div>
    </div>
    <div id="mortgaged"></div> -->
    <div class="row">
     
      <div class="col-md-4"> 
  <div class="form-group">
    <label class="form-control-placeholder" id="withoutinterest" for="rate_of_interest" style="margin-left: 18px;">Enforcement of Security Interest</label>
    <input type="checkbox" id="rate_of_interest" class="form-control check-size" style="width:7%" name="rate_of_interest"  value="yes"  >
    
  </div>
</div>
<div class="col-md-4"> 
  <div class="form-group">
    <label class="form-control-placeholder" id="amount_of_debt" for="amount_of_debt" style="margin-left: 18px;">Enforcement of Guarantees</label>
    <input type="checkbox" id="amount_of_debt" class="form-control check-size" style="width:7%" name="amount_of_debt"  value="yes"  >
    
  </div>
</div>

<div class="col-md-4"> 
  <div class="form-group">
    <label class="form-control-placeholder" id="damages_rs" for="damages_rs" style="margin-left: 18px;">Future Interest During Pendency of Arbitration</label>
    <input type="checkbox" id="damages_rs" class="form-control check-size" style="width:7%" name="damages_rs"  value="yes" onclick="document.getElementById('damages_rs').disabled=this.checked;" >
    
  </div>
</div>


</div>

<div class="row">
    
<div class="col-md-4"> 
  <div class="form-group">
    <label class="form-control-placeholder" id="rate_of_penal_interest" for="rate_of_penal_interest" style="margin-left: 26px;">Future Interest from the Date of Award</label>
    <input type="checkbox" id="rate_of_penal_interest" class="form-control check-size" style="width:7%" name="rate_of_penal_interest"  value="yes" onclick="document.getElementById('rate_of_penal_interest').disabled=this.checked;" >
    
  </div>
</div>
      

     

      @foreach($amount_relief as $amount_reliefs) 
      <div class="col-md-6"> 
        <div class="form-group">
          <input type="text" onkeypress="return isNumberKey(event)"  id="damage_with_interest"  class="form-control{{ $errors->has('damage_with_interest') ? ' is-invalid' : '' }}" value="{{$amount_reliefs->total_amount_bank}}" name="damage_with_interest" style="pointer-events: none;">
          <label class="form-control-placeholder" for="damage_with_interest">Total Outstanding Amount({{$claimantinformations[0]->currency}})<span style="color: red">*</span>:</label>
          @if ($errors->has('damage_with_interest'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('damage_with_interest ') }}</strong>
          </span>
          @endif
        </div>
      </div>
@endforeach
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
  <input type="text" name="reliefrequestid" value="{{$ReliefRequest->id}}" style="display: none">

    <div class="row register-form">
    <div class="col-md-12">

      <div class="row">
       <div class="col-md-12"> 
        <!-- <div class="form-group text-center" style="margin-bottom: 1.4em; color:red; font-size: 15px;">
          <label><b>Please fill in the applicable details  pertaining to the dispute</b></label>
        </div> -->
        
      </div>
    </div>
    <!-- @foreach($banking_relief as $banking_reliefs)
    @if($banking_reliefs->relief_id = $ReliefRequest->id)
    <div class="row">
      <div class="col-md-6" > 
        <div class="form-group">
          <input type="text" id="mortgaged_property" value="{{$banking_reliefs->mortgaged_property}}" readonly class="form-control{{ $errors->has('mortgaged_property') ? ' is-invalid' : '' }}" >
          <label class="form-control-placeholder" for="mortgaged_property">Mortgaged Property/ Pledged Property/Hypothecated property:</label> 
        </div>
      </div>
    </div>
    @endif
    @endforeach -->
    <!-- <div class="row">
      <div class="col-md-6" > 
        <div class="form-group">
          <input type="text" id="mortgaged_property"  class="form-control{{ $errors->has('mortgaged_property') ? ' is-invalid' : '' }}" name="mortgaged_property[]">
          <label class="form-control-placeholder" for="mortgaged_property">Mortgaged Property/ Pledged Property/ Hypothecated property:</label> 
          @if ($errors->has('mortgaged_property'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('mortgaged_property') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="buttons" id="bankrelief_btn" >
        <span class="btn btn-icon btn-sm btn-success">
          <i class="far fa-plus-square"></i> </span>
        </div>
    
    
    
      
        <div class="col-md-5"> 
          <div class="form-group">
           <input type="text" onkeypress="return isNumberKey(event)"  id="debt_recovery"  value="{{$ReliefRequest->debt_recovery}}" class="form-control{{ $errors->has('debt_recovery') ? ' is-invalid' : '' }}" name="debt_recovery"  >
           <label class="form-control-placeholder" for="debt_recovery">Total Aggregate Amount Including Interest and Charges:</label>
           @if ($errors->has('debt_recovery'))
           <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('debt_recovery') }}</strong>
          </span>
          @endif
        </div>
      </div>
    </div>
    <div id="mortgaged"></div> -->
    <div class="row">
     
      <div class="col-md-4"> 
  <div class="form-group">
    <label class="form-control-placeholder" id="rate_of_interest" for="rate_of_interest" style="margin-left: 18px;">Enforcement of Security Interest</label>
    <input type="checkbox" id="rate_of_interest" class="form-control check-size" style="width:7%" name="rate_of_interest"  value="yes "{{ $ReliefRequest->rate_of_interest == 'yes' ? 'checked' : ''}}  >
    
  </div> 
</div>
<div class="col-md-4"> 
  <div class="form-group">
    <label class="form-control-placeholder" id="amount_of_debt" for="amount_of_debt" style="margin-left: 18px;">Enforcement of Guarantees</label>
    <input type="checkbox" id="amount_of_debt" class="form-control check-size" style="width:7%" name="amount_of_debt"  value="yes"{{ $ReliefRequest->amount_of_debt == 'yes' ? 'checked' : ''}}  >
    
  </div>
</div>

<div class="col-md-4"> 
  <div class="form-group">
    <label class="form-control-placeholder" id="damages_rs" for="damages_rs" style="margin-left: 18px;">Future Interest During Pendency of Arbitration</label>
    <input type="checkbox" id="damages_rs" class="form-control check-size" style="width:7%" name="damages_rs"  value="yes"{{ $ReliefRequest->damages_rs == 'yes' ? 'checked' : ''}}  >
    
  </div>
</div>


</div>

<div class="row">
    
<div class="col-md-4"> 
  <div class="form-group">
    <label class="form-control-placeholder" id="rate_of_penal_interest" for="rate_of_penal_interest" style="margin-left: 26px;">Future Interest from the Date of Award</label>
    <input type="checkbox" id="rate_of_penal_interest" class="form-control check-size" style="width:7%" name="rate_of_penal_interest"  value="yes"{{ $ReliefRequest->rate_of_penal_interest == 'yes' ? 'checked' : ''}} >
    
  </div>
</div>
      <div class="col-md-6"> 
        <div class="form-group">
          <input type="text" onkeypress="return isNumberKey(event)"  id="damage_with_interest"   value="{{$ReliefRequest->total_amount_bank}}" class="form-control{{ $errors->has('damage_with_interest') ? ' is-invalid' : '' }}" name="damage_with_interest" readonly>
          <label class="form-control-placeholder" for="damage_with_interest">Total Outstanding Amount({{$claimantinformations[0]->currency}})<span style="color: red">*</span>:</label>
          
        </div>
      </div>

    </div>

  </div>
</div>

  <div class="modal-footer">
    <div class="mx-auto">
      <button type="submit" class="btn btn-success btn-space" >Update</button>
      <button type="reset" class="btn btn-warning btn-space" value="Reset!">Clear</button>
      <button class="btn btn-danger btn-space" type="button" data-dismiss="modal" aria-label="Close">
       Close
     </button>
   </div> 
 </div>   
</form>
@endforeach

@endif
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