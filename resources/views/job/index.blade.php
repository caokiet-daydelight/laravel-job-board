<x-layout>
    @foreach($jobs as $job)
        <x-card class="mb-4">
            <div class=" mb-4 flex justify-between">
                <h2 class="text-lg font-medium">
                    {{$job->title}}
                </h2>
                <div class="text-slate-500">
                    ${{number_format($job->salary)}}
                </div>
            </div>

            <div class="flex justify-between items-center text-sm text-slate-500 mb-4">
                <div class="flex space-x-4">
                    <div>Company Name</div>
                    <div>{{$job->location}}</div>
                </div>
                <div class="flex space-x-2 text-xs">
                    <x-tag>
                        {{Str::ucfirst($job->experience)}}
                    </x-tag>
                    <x-tag>
                        {{$job->category}}
                    </x-tag>
                </div>
            </div>

            <p class="mb-4 text-sm text-slate-500">
                {!!nl2br(e($job->description))!!}
            </p>
            <x-link-button href="{{ route('jobs.show', $job) }}">
                Show
            </x-link-button>
        </x-card>
    @endforeach
</x-layout>
