<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/Buttons/PrimaryButton.vue';
import PrimaryButtonOutline from '@/Components/Buttons/PrimaryButtonOutline.vue';
import CalendarIcon from '@/Components/Icons/CalendarIcon.vue';
import CirclePlusIcon from '@/Components/Icons/CirclePlusIcon.vue';
import PdfIcon from '@/Components/Icons/PdfIcon.vue';
import FileDownloadIcon from '@/Components/Icons/FileDownloadIcon.vue';
import { Alert, AlertDescription, AlertTitle } from '@/components/ui/alert';
import {
    Stepper,
    StepperDescription,
    StepperIndicator,
    StepperItem,
    StepperSeparator,
    StepperTitle,
    StepperTrigger,
} from '@/components/ui/stepper'
import { CheckIcon, CircleIcon, DotIcon } from '@radix-icons/vue'
import LearningBroIllustration from '@/Components/Icons/LearningBroIllustration.vue';
import { HTMLAttributes, onMounted, ref, watch } from 'vue';


const steps = [
    {
        step: 1,
        title: 'Upload mini proposal',
        description: 'Berhasil',
    },
    {
        step: 2,
        title: 'Acc DPA',
        description: 'Belum',
    },
    {
        step: 3,
        title: 'Acc Kaprodi',
        description: 'Belum',
    },
    {
        step: 4,
        title: 'Sidang Proposal',
        description: 'Belum',
    },
]
const props = defineProps<{
    class?: HTMLAttributes['class'],
    uploaded?: boolean
}>()

const isUploaded = ref(props.uploaded ?? false);

onMounted(() => {
    console.log('Dashboard mounted')
    if (props.uploaded) {
        isUploaded.value = false;
    }
})

watch(
    () => props.uploaded,
    (newValue) => {
        if (newValue) {
            isUploaded.value = true;
        }
    }
)

const handleEmpty = () => {
    isUploaded.value = !isUploaded.value;
}


</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                Dashboard Mahasiswa
            </h2>
        </template>
        <div class="absolute -top-12 right-0 left-0 z-10 w-full mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex justify-end ">
                <Alert show variant="default" class="max-w-sm ">
                    <AlertTitle class="ml-2">Alert</AlertTitle>
                    <AlertDescription class="ml-2">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos blanditiis tenetur
                    </AlertDescription>
                </Alert>
            </div>
        </div>
        <div class="pt-12 pb-6">
            <div class="mx-auto max-w-7xl px-6 lg:px-8 grid grid-cols-1 gap-6 md:grid-cols-2 ">
                <div class="flex flex-col gap-4">
                    <div v-if="!isUploaded"
                        class="bg-white shadow-sm rounded-lg dark:bg-gray-800 p-6 flex flex-col justify-center items-center">
                        <div class="w-52 h-52">
                            <LearningBroIllustration />
                        </div>
                        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                            Ayo upload mini proposal
                        </h2>
                    </div>
                    <div class="bg-white shadow-sm rounded-lg dark:bg-gray-800 p-6">
                        <p class="mb-5 font-medium text-lg">Quick Actions</p>
                        <div class="grid grid-cols-2 gap-4">
                            <PrimaryButton @click="handleEmpty">
                                <CirclePlusIcon />
                                Ajukan Mini Proposal
                            </PrimaryButton>
                            <PrimaryButtonOutline>
                                Lihat Riwayat Skripsi
                            </PrimaryButtonOutline>
                        </div>
                    </div>
                    <div v-if="isUploaded" class="bg-white shadow-sm rounded-lg dark:bg-gray-800 p-6">
                        <p class="mb-5 font-medium text-lg">Progress Skripsi</p>
                        <Stepper class="flex w-full items-start gap-2 py-6">
                            <StepperItem v-for="step in steps" :key="step.step" v-slot="{ state }"
                                class="relative flex w-full flex-col items-center justify-center" :step="step.step">
                                <StepperSeparator v-if="step.step !== steps[steps.length - 1].step"
                                    class="absolute left-[calc(50%+20px)] right-[calc(-50%+10px)] top-5 block h-0.5 shrink-0 rounded-full bg-muted group-data-[state=completed]:bg-primary" />

                                <StepperTrigger as-child>
                                    <Button
                                        :variant="state === 'completed' || state === 'active' ? 'default' : 'outline'"
                                        size="icon" class="z-10 rounded-full shrink-0"
                                        :class="[state === 'active' && 'ring-2 ring-ring ring-offset-2 ring-offset-background']">
                                        <CheckIcon v-if="state === 'completed'" class="size-5" />
                                        <CircleIcon v-if="state === 'active'" />
                                        <DotIcon v-if="state === 'inactive'" />
                                    </Button>
                                </StepperTrigger>

                                <div class="mt-5 flex flex-col items-center text-center">
                                    <StepperTitle :class="[state === 'active' && 'text-primary']"
                                        class="text-sm font-semibold transition lg:text-base">
                                        {{ step.title }}
                                    </StepperTitle>
                                    <StepperDescription :class="[state === 'active' && 'text-primary']"
                                        class="sr-only text-xs text-muted-foreground transition md:not-sr-only lg:text-sm">
                                        {{ step.description }}
                                    </StepperDescription>
                                </div>
                            </StepperItem>
                        </Stepper>

                    </div>

                </div>
                <div class="overflow-hidden bg-white shadow-sm rounded-lg dark:bg-gray-800 p-6">
                    <p class="mb-5 font-medium text-lg">Deadline terdekat</p>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex gap-4 items-center border-b border-gray-100 pb-2">
                            <div>
                                <CalendarIcon />
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-gray-800 dark:text-gray-200">
                                    <p>
                                        Batas pengumpulan Mini Proposal Skripsi
                                    </p>
                                </div>
                                <div class="text-sm text-gray-500 dark:text-gray-200">Besok, 13:00 AM </div>
                            </div>
                        </div>
                        <div class="flex gap-4 items-center ">
                            <div>
                                <CalendarIcon />
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-gray-800 dark:text-gray-200">
                                    <p>
                                        Sidang Proposal Skripsi
                                    </p>
                                </div>
                                <div class="text-sm text-gray-500 dark:text-gray-200"> 14:00 Selasa, 12 Januari 2025
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pb-6">
            <div class="mx-auto max-w-7xl px-6 lg:px-8 ">

                <div class="overflow-hidden bg-white shadow-sm rounded-lg dark:bg-gray-800 p-6">
                    <p class="mb-5 font-medium text-lg">Dokumen Acuan</p>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex justify-between items-center bg-gray-100 p-4 rounded">
                            <div class="flex items-center gap-3">
                                <PdfIcon />
                                <p class="">Panduan Mini Proposal</p>
                            </div>
                            <button>
                                <FileDownloadIcon color="#000" />
                            </button>
                        </div>
                        <div class="flex justify-between items-center bg-gray-100 p-4 rounded">
                            <div class="flex items-center gap-3">
                                <PdfIcon />
                                <p class="">Panduan Skripsi</p>
                            </div>
                            <button>
                                <FileDownloadIcon color="#000" />
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>