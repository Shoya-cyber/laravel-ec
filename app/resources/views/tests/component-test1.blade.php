<x-tests.app>
  <x-slot name="header">ヘッダー１</x-slot>
  componenttest1

  <x-tests.card title="タイトル" content="本文" :message="$message"/>
</x-tests.app>