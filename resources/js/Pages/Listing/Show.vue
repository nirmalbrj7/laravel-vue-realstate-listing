<template>
    <div class="flex flex-col-reverse md:grid md:grid-cols-12 gap-4">
        <Box class="md:col-span-7 flex items-center">
            <div class="w-full text-center font-medium text-gray-500 ">Image</div>
        </Box>
        <div class="col-span-12 md:col-span-5 flex flex-col gap-4">
            <Box class="p-2">
                <template #header>
                    Basic Info
                </template>
                <Price :price="listing.price" class="2xl font-bold" />
                <ListingSpace :listing="listing" class="text-lg" />
                <ListingAddress :listing="listing" class="text-gray-500"/>
            </Box>
            <Box class="p-2">
                <template #header>
                    Monthly Payment
                </template>
                <div>
                    <label class="label">Interest Rate ({{interestRate}})</label>
                    <input v-model.number="interestRate" type="range" min="0" max="100" step="0.1" class="w-full h-4 bg-gray-200 rounded-lg appearance-none cursor-pointer"  />

                    <label class="label">Duration ({{duration}} years)</label>
                    <input v-model.number="duration" type="range" min="3" max="35" step="1" class="w-full h-4 bg-gray-200 rounded-lg appearance-none cursor-pointer"  />

                    <div class="text-gray-600 mt-2">
                        <div class="text-gray-400">
                            Your Monthly Payment
                        </div>
                        <Price :price="monthlyPayment" class="text-3xl"></Price>
                    </div>

                    <div class="mt-2 text-gray-500">
                        <div class="flex justify-between" >
                            <div>
                                Total Paid
                            </div>
                            <div>
                                <Price :price="totalPaid" class="font-medium" />
                            </div>
                        </div>
                        <div class="flex justify-between" >
                            <div>
                                Principal Paid
                            </div>
                            <div>
                                <Price :price="listing.price" class="font-medium" />
                            </div>
                        </div>

                        <div class="flex justify-between" >

                            <div>
                                Interest Paid
                            </div>
                            <div>
                                <Price :price="totalInterest" class="font-medium" />
                            </div>

                        </div>




                    </div>
                </div>
            </Box>


        </div>
    </div>
</template>

<script setup>
import ListingAddress from '@/Components/ListingAddress.vue';
import ListingSpace from '@/Components/ListingSpace.vue';
import Price from '@/Components/Price.vue';
import Box from '@/Components/UI/Box.vue';
import { ref } from 'vue';
import { useMonthlyPayment} from '@/Composables/useMonthlyPayment'

const interestRate = ref(2.5);
const duration = ref(25);

const props = defineProps({
    listing: Object
})

const {monthlyPayment,totalPaid, totalInterest} = useMonthlyPayment(props.listing.price, interestRate, duration)


</script>
