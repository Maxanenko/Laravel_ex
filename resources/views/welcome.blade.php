<x-guest-layout>
    <div class="wrapper">
        <div class="table">
            @foreach ($tables as $table)
                <div class="table__item">
                    <p>
                        🍽 Название столика: {{ $table->name }}
                    </p>
                    <p>
                        🤵🏻‍♀️ Количество мест: {{ $table->guest_number }}
                    </p>
                    <p>
                        @if($table->status->name !== 'Pending' and $table->status->name !== 'Unavaliable')
                            Статус столика: Можно бранировать
                        @else
                            Статус столика: Занят
                        @endif
                    </p>
                    <p>
                        Где находится столик: {{ $table->location->name }}
                    </p>


                </div>
            @endforeach
        </div>
    </div>

    <style>
        .wrapper {
            width: 1100px;
            margin: 20px auto;
        }

        .table {
            display: grid;
            gap: 20px;
            grid-template-columns: repeat(4, 1fr);
        }

        .table__item {
            padding: 10px;
            border: 1px solid #20B2AA;
        }
    </style>
</x-guest-layout>
