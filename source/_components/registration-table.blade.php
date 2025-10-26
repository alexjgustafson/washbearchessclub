<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                #
            </th>
            <th scope="col" class="px-6 py-3">
                Name
            </th>
            <th scope="col" class="px-6 py-3">
                USCF ID
            </th>
            <th scope="col" class="px-6 py-3">
                Rating
            </th>
        </tr>
        </thead>
        <tbody>
        <?php $n = 0; ?>
        @foreach($registrations as $r)

            <?php $n++; ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$n}}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$r['name']}}
                </th>
                <td class="px-6 py-4">
                        <?php $idDisplay = $r['id'] ?? '--';
                        $hasId = (bool) $r['id'];
                        echo sprintf('%s%s%s',
                            $hasId ? '<a href="https://www.uschess.org/msa/MbrDtlMain.php?' . $idDisplay .'" target="_blank" rel="noopener noreferrer">' : '',
                            $idDisplay,
                            $hasId ? '</a>' : '',
                        ); ?>
                </td>
                <td class="px-6 py-4">
                    {{$r['rating']}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
