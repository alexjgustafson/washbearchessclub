<?php $showByesColumn = $showByesColumn ?? collect($registrations)->contains(fn ($r) => !empty($r['bye'])); ?>
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-1 py-2 md:py-3">
                #
            </th>
            <th scope="col" class="pl-1 pr-1 md:pr-2 py-2 md:py-3">
                Name
            </th>
            <th scope="col" class="px-1 md:px-2 py-2 md:py-3">
                USCF ID
            </th>
            <th scope="col" class="px-1 md:px-2 py-2 md:py-3">
                Rating
            </th>
            <?php if($showByesColumn): ?>
                <th scope="col" class="px-1 md:px-2 py-2 md:py-3">
                    Byes
                </th>
            <?php endif; ?>
        </tr>
        </thead>
        <tbody>
        <?php $n = 0; ?>
        @foreach($registrations as $r)

            <?php
                $n++;
                $stripe = $n % 2 ? 'bg-white dark:bg-gray-800' : 'bg-gray-50 dark:bg-gray-600';
                ?>
            <tr class="border-b  dark:border-gray-700 border-gray-200 {{$stripe}}">
                <th scope="row" class="px-1 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$n}}
                </th>
                <th scope="row" class="pl-1 pr-1 md:pr-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$r['name']}}
                </th>
                <td class="px-2 py-4">
                        <?php $idDisplay = $r['id'] ?? '--';
                        $hasId = (bool) $r['id'];
                        echo sprintf('%s%s%s',
                            $hasId ? '<a href="https://ratings.uschess.org/player/' . $idDisplay .'" target="_blank" rel="noopener noreferrer">' : '',
                            $idDisplay,
                            $hasId ? '</a>' : '',
                        ); ?>
                </td>
                <td class="px-1 md:px-2 py-4 dark:text-white whitespace-nowrap">
                    {{$r['rating']}}
                    @if(!empty($r['note']))
                        <span class="group relative inline-block align-middle cursor-help outline-none" tabindex="0" aria-label="{{$r['note']}}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-gray-400 group-hover:text-gray-600 group-focus:text-gray-600 dark:group-hover:text-gray-200 dark:group-focus:text-gray-200" aria-hidden="true">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0ZM8.94 6.94a.75.75 0 1 1-1.061-1.061 3 3 0 1 1 2.871 5.026v.345a.75.75 0 0 1-1.5 0v-.5c0-.72.57-1.172 1.081-1.287A1.5 1.5 0 1 0 8.94 6.94ZM10 15a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" clip-rule="evenodd" />
                            </svg>
                            <span role="tooltip" class="invisible opacity-0 group-hover:visible group-hover:opacity-100 group-focus:visible group-focus:opacity-100 transition-opacity absolute z-10 right-full top-1/2 -translate-y-1/2 mr-2 w-48 whitespace-normal rounded bg-gray-900 dark:bg-gray-100 px-2 py-1 text-xs font-normal normal-case text-white dark:text-gray-900 shadow-lg">
                                {{$r['note']}}
                            </span>
                        </span>
                    @endif
                </td>

                <?php if($showByesColumn): ?>
                    <td class="px-1 md:px-2 py-4 dark:text-white">
                        {{$r['bye'] ?? ''}}
                    </td>
                <?php endif; ?>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
