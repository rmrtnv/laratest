
<x-layout>

@if ($data)

<div class="container flex flex-row justify-left mb-4 ">
  <form action="{{ route('truncate') }}" method="post" onSubmit="return confirm('Do you want to erase all data?') ">
    @csrf
    <input type="submit" value="TRUNCATE TABLE" class="bg-red-500 text-white text-xs cursor-pointer">
  </form>
</div>

<table border="1">
  <thead>
    <tr>
      <th scope="col">Code</th>
      <th scope="col">Name</th>
      <th scope="col">Level1</th>
      <th scope="col">Level2</th>
      <th scope="col">Level3</th>
      <th scope="col">Price</th>
      <th scope="col">Price_sp</th>
      <th scope="col">Qnty</th>
      <th scope="col">Fields</th>
      <th scope="col">Tbuy</th>
      <th scope="col">Unit</th>
      <th scope="col">Pic</th>
      <th scope="col">Main</th>
      <th scope="col">Desc</th>
    </tr>
  </thead>
  <tbody>

    @foreach($data as $r)
    <tr>
        <td>{{ $r->code }}</td>
        <td>{{ $r->name }}</td>
        <td>{{ $r->level1 }}</td>
        <td>{{ $r->level2 }}</td>
        <td>{{ $r->level3 }}</td>
        <td>{{ $r->price }}</td>
        <td>{{ $r->price_sp }}</td>
        <td>{{ $r->qnty }}</td>
        <td>{{ $r->property_fields }}</td>
        <td>{{ $r->tbuy }}</td>
        <td>{{ $r->unit }}</td>
        <td>{{ $r->pic }}</td>
        <td>{{ $r->display_on_main }}</td>
        <td>{{ $r->description }}</td>
    </tr>
    @endforeach

  </tbody>
</table>

<style>
table, th, td {
border: 1px solid rgb(226, 226, 226);
border-collapse: collapse;
font-size: 12px;
}
</style>

@endif

</x-layout>