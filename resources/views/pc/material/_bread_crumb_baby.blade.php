<div class="container-fluid bread-crumb">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 box">
                <ul class="list-inline">
                    <li class="text-center line"><a href="{{ route('pc.index') }}" target="_blank" title="tm超市优惠券">首页</a></li>
                    <li class="text-center line"><a href="{{ route('pc.allGoodsCategory.index') }}" target="_self" title="优惠券商品分类">全部商品</a></li>
                    @foreach($allInfo['rules'] as $key => $rule)
                        <li class="text-center @if($key == $currentId) active @endif"><a href="{{ route('pc.optimusMaterial.baby', ['id'=>$key]) }}" target="_self" title="{{ $rule['category'] }}优惠券">{{ $rule['category'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
