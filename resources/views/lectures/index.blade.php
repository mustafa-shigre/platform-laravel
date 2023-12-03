<x-app-layout>
    <x-slot name="header">
        lectures
        <a href="{{ route('lectures.create') }}" class="btn btn-secondary float-end">{{__('mylang.createlecture')}}</a>
    </x-slot>
    <div class="container">
        <table class="table table-striped mt-5"  >
            <thead >
                <tr >
                    <th>{{__('mylang.title')}}</th>
                    <th>{{__('mylang.description')}}</th>
                    <th>{{__('mylang.video')}}</th>
                    <th>{{__('mylang.action')}}</th>
                </tr>
            </thead>
            <tbody class="">
                @foreach($lectures as $lecture)
                    <tr>
                        <td class="">{{ $lecture ->title }}</td>
                        <td class="">{{ $lecture ->description }}</td>
                        <td class="">{{ $lecture ->video}}</td>
                        <td>
                            <a href="{{ route('lectures.edit', $lecture->id) }}" class="btn btn-secondary">{{__('mylang.edit')}}</a>
                            <form action="{{ route('lectures.destroy', $lecture->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn" style="color:light ; border:1px solid blue;">{{__('mylang.delete')}}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
