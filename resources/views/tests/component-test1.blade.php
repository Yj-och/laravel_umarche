<x-tests.app>
    <x-slot name="header">ヘッダー１</x-slot>
    component Test1
    <x-tests.card title="タイトル" content="本文" :message="$message"></x-tests.card>
    <x-tests.card title="タイトル2"></x-tests.card>
    <x-tests.card title="CSS changed" class="bg-red-300"></x-tests.card>
</x-tests.app>
