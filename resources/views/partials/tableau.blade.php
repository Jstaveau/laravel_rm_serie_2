<section>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Outil</th>
                <th scope="col">Prix</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tableau as $item)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$item->nom}}</td>
                    <td>{{$item->prix}}€</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
