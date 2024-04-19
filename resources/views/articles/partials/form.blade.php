<div>
    <label for="title-input">Title</label>
    <input id="title-input" type="text" name="title" value="{{old('title', optional($article ?? null)->title)}}">
    @error('title')
    <p>{{$message}}</p>
    @enderror
</div>
<div>
    <label for="content-input">Content</label>
    <textarea id="content=input" name="content">{{old('content',optional($article ?? null)->content)}}</textarea>
    @error('content')
    <p>{{$message}}</p>
    @enderror
</div>
<div>
    <label for="date-input">Date and Time</label>
    <input type="text" id="datepicker" name="dateTime" value="{{ old('dateTime', optional($article ?? null)->dateTime) }}">
    @error('dateTime')
    <p>{{$message}}</p>
    @enderror
</div>
<div>
    <label for="address-input">Address</label>
    <input id="address-input" type="text" name="address" value="{{old('address', optional($article ?? null)->address)}}">
    @error('address')
    <p>{{$message}}</p>
    @enderror
</div>


