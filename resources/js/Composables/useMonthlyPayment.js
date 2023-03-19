import { computed, isRef } from 'vue';

export const useMonthlyPayment = (total, interestRate, duration) => {
    const monthlyPayment = computed(()=>{
        const principle = isRef(total) ? total.value : total;
        const monthlyInterest = (isRef(interestRate) ? interestRate.value : interestRate) / 100 / 12;
        const numberOfPayments = (isRef(duration) ? duration.value : duration) * 12;
        return principle * monthlyInterest * (Math.pow(1 + monthlyInterest, numberOfPayments) / (Math.pow(1 + monthlyInterest, numberOfPayments) - 1));
    })

    const totalPaid = computed(()=>{
        return monthlyPayment.value * (isRef(duration) ? duration.value : duration) * 12;
    })

    const totalInterest = computed(()=>{
        return totalPaid.value - (isRef(total) ? total.value : total);
    })

    return { monthlyPayment, totalPaid, totalInterest }
}
