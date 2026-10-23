---
title: 'Yule Cat Calculator - Washbear Chess Club'
description: "Randomly draws the starting position and time control for each round of the Yule Cat's Hangover."
---

@extends('_layouts.main')

@push('head')
    <link rel="preload" as="image" href="{{ $page->imageBucket }}Yule_cat--medium.webp">
@endpush

@section('body')
    <div class="mb-8 text-center">
        <h2 class="text-3xl font-bold block mb-8">Yule Cat Calculator 🐈‍⬛</h2>
    </div>
    <div class="prose mx-auto dark:prose-invert px-2" x-data="yuleCat()">
        <p>The Yule Cat decides each round of the <a href="/tournaments/yule-cats-hangover">Yule Cat's Hangover</a>. Click the button to see what he has in store.</p>

        <div class="text-center my-8 block">
            <button type="button" @click="roll()" class="text-lg text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Summon the Yule Cat</button>
        </div>

        <div x-show="result" x-cloak class="relative">
            <template x-for="id in summons" :key="id">
                <div class="not-prose absolute inset-0 z-10 pointer-events-none animate-yule-fade motion-reduce:hidden" @animationend="summons = []" aria-hidden="true">
                    @img([
                        'src' => 'Yule_cat--medium.webp',
                        'alt' => '',
                        'class' => 'w-full h-full object-cover rounded-lg'
                    ])
                </div>
            </template>

            <h3>Starting Position</h3>
            <template x-if="result">
                <div>
                    <p class="text-2xl font-bold" x-text="result.position.name"></p>
                    <div class="grid grid-cols-8 text-center leading-none text-[min(11vw,4.5rem)]" :aria-label="result.position.letters">
                        <template x-for="(symbol, i) in result.position.symbols" :key="i">
                            <span aria-hidden="true" x-text="symbol"></span>
                        </template>
                    </div>
                    <p class="font-mono text-xl tracking-widest" x-text="result.position.letters"></p>
                    <p>White's back rank from a1 to h1. Black mirrors it on the 8th rank. Pawns start as normal.</p>
                </div>
            </template>

            <h3>Time Control</h3>
            <p class="text-2xl font-bold" x-text="result && result.timeControl"></p>
            <ul>
                <li>Base time: <span x-text="result && result.baseTime.label"></span></li>
                <li>Added time: <span x-text="result && result.addedTime.label"></span></li>
            </ul>

            <h3>Colors</h3>
            <p>Flip a coin!</p>
        </div>
    </div>

    <script>
        function yuleCat() {
            const BASE_TIMES = [
                { code: 'G/20', label: '20 minutes' },
                { code: 'G/15', label: '15 minutes' },
                { code: 'G/10', label: '10 minutes' },
            ];
            const ADDED_TIMES = [
                { code: ';+5', label: '5 second increment' },
                { code: ';d5', label: '5 second delay' },
                { code: '', label: 'None' },
            ];
            const SYMBOLS = { K: '♔', Q: '♕', R: '♖', B: '♗', N: '♘' };

            // Knight placements among the 5 empty squares left after bishops and queen.
            const KNIGHTS = [[0, 1], [0, 2], [0, 3], [0, 4], [1, 2], [1, 3], [1, 4], [2, 3], [2, 4], [3, 4]];

            const pick = (options) => options[Math.floor(Math.random() * options.length)];

            // Standard Chess960 numbering (0-959), where #518 is RNBQKBNR.
            function chess960(number) {
                const rank = Array(8).fill(null);
                let n = number;

                rank[2 * (n % 4) + 1] = 'B';
                n = Math.floor(n / 4);
                rank[2 * (n % 4)] = 'B';
                n = Math.floor(n / 4);

                const empty = () => rank.map((p, i) => p ? null : i).filter((i) => i !== null);

                rank[empty()[n % 6]] = 'Q';
                n = Math.floor(n / 6);

                const open = empty();
                KNIGHTS[n].forEach((i) => rank[open[i]] = 'N');

                const [r1, k, r2] = empty();
                rank[r1] = 'R';
                rank[k] = 'K';
                rank[r2] = 'R';

                return {
                    number,
                    letters: rank.join(''),
                    symbols: rank.map((p) => SYMBOLS[p]),
                };
            }

            const position960 = (number) => ({ ...chess960(number), name: `Chess960 #${number}` });

            return {
                result: null,
                summons: [],
                roll() {
                    this.summons = [Date.now()];
                    const baseTime = pick(BASE_TIMES);
                    const addedTime = pick(ADDED_TIMES);
                    this.result = {
                        position: Math.random() < 0.5
                            ? { ...chess960(518), name: 'Standard Position' }
                            : position960(Math.floor(Math.random() * 960)),
                        baseTime,
                        addedTime,
                        timeControl: baseTime.code + addedTime.code,
                    };
                },
            };
        }
    </script>
@endsection
