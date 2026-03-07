
    <x-layout>
    <x-slot:heading>
        Product List
    </x-slot>
    <x-table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product['id'] }}</td>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['category'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </x-table>
</x-layout>