<div class="row">
    <div class="col-md-6">
        {!!Form::text('Coordinator_name','Course')!!}
    </div>
    <div class="col-md-6">
        {!!Form::select('Duration','Duration',['one_day'=>'One Day','two_days'=>'Two Days','three_days'=>'Three Days','four_days'=>'Four Days','five_days'=>'Five Days','ten_days'=>'Ten Days','one_month'=>'One Month','two_months'=>'Two Months','three_months'=>'Three Months']) !!}
    </div>
   <div class="col-md-6">
        {!!Form::select('Target_group','Target_group')!!}
    </div>
    <div class="col-md-6">
        {!!Form::text('Description','Description')!!}
    </div>
</div>
