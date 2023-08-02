<?php

use function Laravel\Folio\{middleware};

middleware(['auth']);

?>

<x-blog-layout>
    <div class="container mx-auto">
        About page
    </div>
</x-blog-layout>
