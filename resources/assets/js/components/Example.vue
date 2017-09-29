<template>
    <div class="container">
        <ul>
            <li v-for="item in itens">{{ item }}</li>
        </ul>
        <button v-on:click="addItens">See more...</button>
    </div>
</template>

<script>
    export default {
        mounted() {
        },
        data() {
            return {
                itens: [
                    'item1',
                    'item2',
                    'item3',
                    'item4',
                    'item5'
                ],
                data: [
                    'item6',
                    'item7',
                    'item8',
                    'item9',
                    'item10'
                ]
            }
        },
        methods: {
            addItens() {
                var to_concat = this.data.slice(0, 5)
                this.itens = this.itens.concat( to_concat )
            }
        }
    }
</script>
