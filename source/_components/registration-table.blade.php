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
            <th scope="col" class="px-1 md:px-2 py-2 md:py-3">
                Byes
            </th>
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
                            $hasId ? '<a href="https://www.uschess.org/msa/MbrDtlMain.php?' . $idDisplay .'" target="_blank" rel="noopener noreferrer">' : '',
                            $idDisplay,
                            $hasId ? '</a>' : '',
                        ); ?>
                </td>
                <td class="px-1 md:px-2 py-4 dark:text-white">
                    {{$r['rating']}}
                </td>
                <td class="px-1 md:px-2 py-4 dark:text-white">
                    {{$r['bye'] ?? ''}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
