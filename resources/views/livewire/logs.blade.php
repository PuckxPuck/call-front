<div class="overflow-x-auto">
    @if ($savedSuccess)

        @endif
<table class="table w-full">
    <thead>
        <tr>
            <th>Id</th>
            <th>Number</th>
            <th>Date</th>
            <th>Time</th>
            <th>Duration</th>
            <th>Tags</th>
            <th>Class</th>
            <th>Notes</th>
            <th>Action</th>


        </tr>
    </thead>
    <tbody>

        @foreach ($logs as $key => $log)
            <tr x-data="{ update: false }">
                <td sortable>
                    {{ $log['id'] }}
                </td>
                <td sortable>{{ $log['number'] }}</td>
                <td sortable>{{ \Carbon\Carbon::parse($log['date'])->format('m-d-Y') }}</td>
                <td sortable>{{ \Carbon\Carbon::parse($log['date'])->format('H:i') }}</td>
                <td sortable>{{ \Carbon\CarbonInterval::seconds($log['duration'])->cascade()->forHumans() }}</td>
                <td sortable>
                    <select wire:model.defer="tag.{{ $log['id'] }}"t x-bind:disabled="!update"
                        class="select w-full max-w-xs">
                        <option @if ($log['tags'] == null) selected @endif></option>
                        <option @if ($log['tags'] == 'sale') selected @endif value="sale">Sales</option>
                        <option @if ($log['tags'] == 'inquiry') selected @endif value="inquiery">Inquiery</option>
                        <option @if ($log['tags'] == 'misc') selected @endif value="misc">Undhagu kuran
                        </option>
                    </select>
                </td>
                <td>
                    <select wire:model.defer="class.{{ $log['id'] }}" x-bind:disabled="!update"
                        class="select w-full max-w-xs">
                        <option @if ($log['class'] == null) selected @endif></option>
                        <option @if ($log['class'] == 'online') selected @endif value="online">Online</option>
                        <option @if ($log['class'] == 'physical') selected @endif value="physical">Learning Center
                        </option>
                        <option @if ($log['class'] == 'both') selected @endif value="both">Both
                        </option>
                    </select>
                </td>
                <td> <input wire:model.defer="notes.{{ $log['id'] }}" class="input input-bordered w-full max-w-xs"
                        type="text" x-bind:disabled="!update" />
                </td>
                <td class="font-bold ">
                    <a x-show="!update" class="text-[#8900C4] cursor-pointer" @click="update = !update" type="button">
                        Update
                    </a>
                    <a x-show="update" class="text-green-500 mr-5 cursor-pointer" @click="update = !update"
                        wire:click="logUpdate({{ $log['id'] }})" type="button">
                        Submit
                    </a>
                    <a x-show="update" wire:click="clear" class="text-red-500 cursor-pointer" @click="update = !update"
                        type="button">
                        Cancel
                    </a>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $logs->links() }}
</div>
