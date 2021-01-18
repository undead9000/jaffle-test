<footer class="footer">
  <div class="footer__container">
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
</footer>
<div class="sub-footer">
  <div class="sub-footer__container">
    <ul class="sub-footer__socials">
        <li>
            <a href="@php the_field('sub-footer__facebook', 'option'); @endphp" class="sub-footer__fb"></a>
        </li>
        <li>
            <a href="@php the_field('sub-footer__instagram', 'option'); @endphp" class="sub-footer__instagram"></a>
        </li>
        <li>
            <a href="@php the_field('sub-footer__twitter', 'option'); @endphp" class="sub-footer__twitter"></a>
        </li>                
    </ul>
    <div class="sub-footer__copyright">
      @php the_field('sub-footer__copyright', 'option') @endphp
    </div>
  </div>    
</div>