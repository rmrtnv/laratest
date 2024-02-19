

<x-layout>

<div class="flex flex-col w-96 content-center">
<form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" accept=".csv">
    <button type="submit" style="margin-top: 30px; background-color: seagreen; color: white; padding: 8px; border-radius: 2px; font-weight: bold; cursor: pointer;">Import CSV</button>
</form>
</div>
</x-layout>