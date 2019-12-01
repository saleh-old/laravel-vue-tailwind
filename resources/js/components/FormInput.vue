<template>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" :for="id">
            {{ placeholder }}
        </label>
        <input
            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            :id="id"
            :name="name"
            :value="value"
            :autofocus="autofocus"
            :required="required"
            :type="type"
            :placeholder="placeholder"
        >

        <p v-if="error"
            class="mt-2 text-red-500 text-xs italic">{{ error }}</p>
    </div>
</template>

<script>
    export default {
        name: 'form-input',
        props: {
            id: {
                type: String,
                required: true
            },
            name: {
                type: String,
                required: true
            },
            value: {
                type: String,
            },
            autofocus: {
                type: Boolean,
                default: false
            },
            required: {
                type: Boolean,
                default: false
            },
            type: {
                type: String,
                default: 'text'
            },
            placeholder: {
                type: String,
            },
            error: {
                type: String,
                default: ''
            }
        }
    };
</script>
