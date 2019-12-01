<template>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" :for="id">
            {{ placeholder }}
        </label>

        <textarea
            :id="id"
            :name="name"
            :cols="cols"
            :autofocus="autofocus"
            :required="required"
            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            :placeholder="placeholder"
            :rows="row"
            v-model="currentValue"
        ></textarea>

        <p v-if="error"
           class="mt-2 text-red-500 text-xs italic">{{ error }}</p>
    </div>
</template>

<script>
    export default {
        name: 'form-textarea',
        data() {
            return {
                currentValue: this.getDefaultValue()
            }
        },
        methods: {
            getDefaultValue() {
                if (this.$slots.default && this.$slots.default.length) {
                    return this.$slots.default[0].text
                }

                return this.value
            }
        },
        props: {
            value: {
                required: false,
                type: String,
                default: '',
            },
            id: {
                type: String,
                required: true
            },
            name: {
                type: String,
                required: true
            },
            autofocus: {
                type: Boolean,
                default: false
            },
            required: {
                type: Boolean,
                default: false
            },
            placeholder: {
                type: String,
                default: ''
            },
            error: {
                type: String,
                default: ''
            },
            row: {
                type: Number,
                default: 5
            },
            cols: {
                type: Number,
                default: 30
            }
        }

    };
</script>
