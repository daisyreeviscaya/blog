@extends('examiner.dashboard')
@section('content')
@include('examiner.annualnav')
<h1>ABC Company</h1>
  <table class="table table-hover" >
    <thead>
    	<tr>
    		<th>Assets</th>
    		<th>Per Company</th>
    	</tr>
    </thead>
    <tbody>
      <tr>
        <td>Cash Restricted - Clients' Money Account</td>
        <td></td>
      </tr>	
      <tr>
        <td>Cash and Cash Equivalents</td>
        <td></td>
      </tr>
      <tr>
        <td>Receivable from Insurance Companies' Clients</td>
        <td></td>
      </tr>
      <tr>
        <td>Receivable from Ceding Company</td>
        <td></td>
      </tr>
      <tr>
        <td>Receivable from HMO's Members</td>
        <td></td>
      </tr>
      <tr>
        <td>Commission Receivable</td>
        <td></td>
      </tr>
    </tbody>
  </table>

  <table class="table table-hover">
    <thead>
    	<tr>
    		<th>Liabilities</th>
    		<th>Per Company</th>
    	</tr>
    </thead>
    <tbody>
      <tr>
        <td>Trade and Other Payables</td>
        <td></td>
      </tr>
      <tr>
        <td>Total Liabilities</td>
        <td></td>
      </tr>
    </tbody>
  </table>
  <table class="table table-hover" >
    <thead>
    	<tr>
    		<th>Equity</th>
    		<th>Per Company</th>
    	</tr>
    </thead>
    <tbody>
      <tr>
        <td>Capital Stock</td>
        <td></td>
      </tr>	
      <tr>
        <td>Contingency Surplus</td>
        <td></td>
      </tr>
      <tr>
        <td>Retained Earnings</td>
        <td></td>
      </tr>
      <tr>
        <td>Total Equity</td>
        <td></td>
      </tr>
      <tr>
        <td>Total Liabilities and Equity</td>
        <td></td>
      </tr>
    </tbody>
  </table>

@endsection