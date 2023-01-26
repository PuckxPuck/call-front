<div class="overflow-x-auto">
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
                    <td>
                        {{ $log['id'] }}
                    </td>
                    <td>{{ $log['number'] }}</td>
                    <td>{{\Carbon\Carbon::parse($log['date'])->format('m-d-Y')}}</td>
                    <td>{{\Carbon\Carbon::parse($log['date'])->format('H:i')}}</td>
                    <td>{{\Carbon\CarbonInterval::seconds($log['duration'])->cascade()->forHumans()}}</td>
                    <td>
                        <select x-bind:disabled="!update" class="select w-full max-w-xs">
                            <option @if ($log['tags'] == null) selected @endif></option>
                            <option @if ($log['tags'] == 'sale') selected @endif value="sale">Sales</option>
                            <option @if ($log['tags'] == 'inquiry') selected @endif value="inquiery">Inquiery</option>
                            <option @if ($log['tags'] == 'misc') selected @endif value="misc">Undhagu kuran
                            </option>
                        </select>
                    </td>
                    <td>
                        <select x-bind:disabled="!update" class="select w-full max-w-xs">
                            <option @if ($log['class'] == null) selected @endif></option>
                            <option @if ($log['class'] == 'online') selected @endif value="online">Online</option>
                            <option @if ($log['class'] == 'physical') selected @endif value="physical">Learning Center</option>
                            <option @if ($log['class'] == 'both') selected @endif value="both">Both
                            </option>
                        </select>
                    </td>
                    <td> <input class="input input-bordered w-full max-w-xs" type="text" x-bind:disabled="!update"
                            value="{{ $log['notes'] }}" />
                    </td>
                    <td class="font-bold ">
                        <a x-show="!update" class="text-[#8900C4]" href="#" @click="update = !update"
                            type="button">
                            Update
                        </a>
                        <a x-show="update" class="text-green-500 mr-5" href="#" @click="update = !update"
                            wire:click="logUpdate({{ $log['id'] }})" type="button">
                            Submit
                        </a>
                        <a x-show="update" wire:click="clear" class="text-red-500" href="#"
                            @click="update = !update" type="button">
                            Cancel
                        </a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{-- <div>
    <Table  dataSource={{$logs}} >
        <Column title="Id" dataIndex="id" key="id" />
        <Column title="Number" dataIndex="number" key="number" />
        <Column title="Date" dataIndex="date" key="date" />
        <Column title="Time" dataIndex="time" key="time" />
        <Column title="Duration" dataIndex="duration" key="duration" />
        <Column title="Tags" dataIndex="tags" key="tags" />
        <Column title="Class" dataIndex="class" key="class" />
        <Column title="Notes" dataIndex="notes" key="notes" />
    </Table>
</div>

<script>
    import { Space, Table, Tag } from 'antd';
    import type { ColumnsType } from 'antd/es/table';

    const columns = [
        {
            title: 'Id',
            dataIndex: 'id',
            key: 'id',
            render: (text) => <a>{text}</a>,
        },
        {
            title: 'Number',
            dataIndex: 'number',
            key: 'number',
        },
        {
            title: 'Date',
            dataIndex: 'date',
            key: 'date',
        },
        {
            title: 'Time',
            dataIndex: 'time',
            key: 'time',
        },
        {
            title: 'Duration',
            dataIndex: 'duration',
            key: 'duration',
        },
        {
            title: 'Tags',
            key: 'tags',
            dataIndex: 'tags',
            render: (tags) => (
                <>
                    {tags.map((tag) => {
                        let color = tag.length > 5 ? 'geekblue' : 'green';
                        if (tag === 'loser') {
                            color = 'volcano';
                        }
                        return (
                            <Tag color={color} key={tag}>
                                {tag.toUpperCase()}
                            </Tag>
                        );
                    })}
                </>
            ),
        },
        {
            title: 'Class',
            dataIndex: 'class',
            key: 'class',
        },
        {
            title: 'Notes',
            dataIndex: 'notes',
            key: 'notes',
        },
        {
            title: 'Action',
            key: 'action',
            render: (text, record) => (
                <Space size="middle">
                    <a>Invite {record.name}</a>
                    <a>Delete</a>
                </Space>
            ),
        },
    ];
</script> --}}