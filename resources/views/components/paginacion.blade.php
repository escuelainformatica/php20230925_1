<ul class="pagination pagination-sm m-0 float-right">
    <li class="page-item"><a class="page-link" href="#">«</a></li>
    
    @for($i=1;$i<=$numPage;$i++) 

        @if($i==$curPage)
        
        <li class="page-item active"><a class="page-link" href="#">{{$i}}</a></li>
        @else
        <li class="page-item"><a class="page-link" href="{{$url}}/{{$i}}">{{$i}}</a></li>
        @endif
    @endfor
    <li class="page-item"><a class="page-link" href="#">»</a></li>
</ul>