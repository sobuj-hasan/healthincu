<thead class="i-p-q">
    @foreach ($products as $product) 
    <tr class="text-center">
      <th scope="col">
        <div class="name-o-p">
          <div class="name-left float-left">
            <a href="#"><span><i class="fa fa-heart" aria-hidden="true"></i></span>
              <p>Wishlist</p>
            </a>
            <a href="#"><span><i class="fa fa-compress" aria-hidden="true"></i></span>
              <p>Compare</p>
            </a>
            <a href="javascript:void(0)" class="removecart" data-id="{{ $product->rowId }}"><span><i class="fa fa-times" aria-hidden="true"></i></span>
              <p>Remove</p>
            </a>
          </div>
          <div class="name-right float-right">
            <h5>{{$product->name}}</h5>
            <p> <span>Code:</span> #{{$product->id}}</p>
            <p><span>Manufacture:</span> dd/mm/yy</p>
            <ul>
              <li><i class="fa fa-star" aria-hidden="true"></i></li>
              <li><i class="fa fa-star" aria-hidden="true"></i></li>
              <li><i class="fa fa-star" aria-hidden="true"></i></li>
              <li><i class="fa fa-star" aria-hidden="true"></i></li>
              <li><i class="fas fa-star-half-alt"></i></li>
            </ul>

          </div>
        </div>
      </th>
      <th scope="col">
        <div class="price-sar">
          <h4>SAR {{$product->price}}</h4>
        </div>
      </th>
      <th scope="col">
        <select name="qty" class="incrementCart-{{ $product->rowId }}" onchange="updateCartQty({{ $product->rowId }})">
                <option value="1" {{$product->qty == 1 ? 'selected' : ''}}>1 pcs</option>
                <option value="2" {{$product->qty == 2 ? 'selected' : ''}}>2 pcs</option>
                <option value="3" {{$product->qty == 3 ? 'selected' : ''}}>3 pcs</option>
                <option value="4" {{$product->qty == 4 ? 'selected' : ''}}>4 pcs</option>
                <option value="5" {{$product->qty == 5 ? 'selected' : ''}}>5 pcs</option>
                <option value="6" {{$product->qty == 6 ? 'selected' : ''}}>6 pcs</option>
                <option value="7" {{$product->qty == 7 ? 'selected' : ''}}>7 pcs</option>
                <option value="8" {{$product->qty == 8 ? 'selected' : ''}}>8 pcs</option>
                <option value="9" {{$product->qty == 9 ? 'selected' : ''}}>9 pcs</option>
                <option value="10" {{$product->qty == 10 ? 'selected' : ''}}>10 pcs</option>
            </select>
      </th>
    </tr>
    @endforeach


  </thead>

