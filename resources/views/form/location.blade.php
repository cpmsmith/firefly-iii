<div class="{{{$classes}}}">
    <label for="{{{$options['id']}}}" class="col-sm-4 control-label">{{{$label}}}</label>
    <div class="col-sm-8">
        <div id="map-canvas" style="width:100%;height:300px;"></div>
        <p class="help-block">Right-click to set the tag's location.
        <a href="#" id="clearLocation">Clear location</a>
        </p>
            <input type="hidden" name="latitude" value="" />
            <input type="hidden" name="longitude" value="" />
            <input type="hidden" name="zoomLevel" value="6" />
        <input type="hidden" name="setTag" value="" />
        @include('form.feedback')
    </div>
</div>
