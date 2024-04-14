<footer class="print-hidden">
@if(count(setting('app-footer-links', [])) > 0)

    @foreach(setting('app-footer-links', []) as $link)
        <a href="{{ $link['url'] }}" target="_blank" rel="noopener">{{ strpos($link['label'], 'trans::') === 0 ? trans(str_replace('trans::', '', $link['label'])) : $link['label'] }}</a>
        
    @endforeach
    

@endif
translate by <a href="https://schoolworks.kr" target="_blank">SchoolWork.kr</a>, neohum@nate.com
</footer>