@php global $post @endphp


<section id="tableWrap">
  @include('partials.filter-years')
<table id="billsTable" style="width:100%">
  <thead>
    <tr>
      <th>Name</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    @php $bills = PageBills::bills(2020); @endphp
    @foreach($bills as $post)
    @php setup_postdata( $post ) @endphp
    @include('partials.bill-row')
    @php wp_reset_postdata() @endphp
    @endforeach
  </tbody>
  </table>
</section>