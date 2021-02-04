<div>
    @if($this->image)
        <img width="40px" src="{{ Storage::url('photos/'.$this->image->nombre) }}" alt="hola">
    @endif
</div>
