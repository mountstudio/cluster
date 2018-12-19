<input type="checkbox" id="menu-toggle" hidden>
<nav class="menu bg-dark">
    <label for="menu-toggle" class="menu-toggle" onclick></label>

    @include('_partials._all_categories', ['fixed' => true])
</nav>
<div class="mask-content"></div>