<div class="blog-sidebar">
    <h4 class="title">categories</h4>
    <ul class="blog-archive blog-category">
        <li><a href="{{ route('alba') }}" style="{{ Route::currentRouteName() === 'alba' ? 'color: #e97d1f;' : '' }}">Alba
                Cinnamon</a></li>
        <li><a href="#">Continental</a></li>
        <li>
            <a href="{{ route('mexican') }}"
                style="{{ Route::currentRouteName() === 'mexican' ? 'color: #e97d1f;' : '' }}">Mexican</a>
        </li>
        <li><a href="#">Hamburg</a></li>
    </ul>
</div>
