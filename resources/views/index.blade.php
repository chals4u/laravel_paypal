
	<div class="row">
	    <div class="col-12">
	        @if (session('success'))
	            <div class="alert alert-success" role="alert">
	                {{ session('success') }}
	            </div>
	        @endif
	        @if (session('error'))
	            <div class="alert alert-danger" role="alert">
	                {{ session('error') }}
	            </div>
	        @endif
	    </div>
	</div>
	<div class="row">
        <div class="col-12"><h3>Transaction History</h3>
        </div>
    </div>
	<div class="card">
		<div class="card-body">
			<div style="clear:both;">
                <table id="orderTable" class="table table-bordered" width="100%" border="1">
                    <thead>
                        <tr>
                            <th >OrderID</th>
				    		<th >Subscription</th>
				    		<th >TransactionID</th>
				    		<th >Amount</th>
							<th >Payment Status</th>
                        </tr>
                    </thead>
					<tr>
					@foreach($orders as $order)
					<td align="center">{{$order->id}}</td>
					<td align="center">{{$order->service_id}}</td>
					<td align="center">{{$order->transaction_id}}</td>
					<td align="center">{{$order->amount}}</td>
					<td align="center">@if($order->payment_status==1){{'Completed'}}@else {{'Pending'}}@endif</td>
					@endforeach
                </table>
            </div>
		</div>
	</div>
	@section('js')
    <script type="text/javascript">
    	
    	// Hide alert message
	    $(".alert").fadeTo(2000, 500).slideUp(500, function(){
	        $(".alert").slideUp(500);
	    });
    </script>
@stop