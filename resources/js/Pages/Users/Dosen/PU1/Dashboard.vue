<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import CardInfoDashboard from '@/Components/Cards/CardInfoDashboard.vue';
import PrimaryButton from '@/Components/Buttons/PrimaryButton.vue';
import PrimaryButtonOutline from '@/Components/Buttons/PrimaryButtonOutline.vue';
import CalendarIcon from '@/Components/Icons/CalendarIcon.vue';
import CirclePlusIcon from '@/Components/Icons/CirclePlusIcon.vue';
import ArrowRightIcon from '@/Components/Icons/ArrowRightIcon.vue';
import CircleCheckIcon from '@/Components/Icons/CircleCheckIcon.vue';
import ChatCitcleDotsIcon from '@/Components/Icons/ChatCircleDotsIcon.vue';
import PdfIcon from '@/Components/Icons/PdfIcon.vue';
import FileDownloadIcon from '@/Components/Icons/FileDownloadIcon.vue';
import WordIcon from '@/Components/Icons/WordIcon.vue';
import ExcelIcon from '@/Components/Icons/ExcelIcon.vue';
import RadioFillIcon from '@/Components/Icons/RadioFillIcon.vue';
import ClockIcon from '@/Components/Icons/ClockIcon.vue';
import StopSignIcon from '@/Components/Icons/StopSignIcon.vue';
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                Dashboard Dosen Penguji Skripsi I
            </h2>
        </template>

        <div class="pt-12 pb-6">
            <div class="mx-auto max-w-7xl px-6 lg:px-8 grid grid-cols-2 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <CardInfoDashboard title="Pengajuan Aktif" value="1213">
                    <div class="bg-primary-300 p-2 rounded-full">
                        <RadioFillIcon />
                    </div>
                </CardInfoDashboard>
                <CardInfoDashboard title="Pengajuan Pending" value="402">
                    <div class="bg-yellow-600 p-2 rounded-full">
                        <ClockIcon />
                    </div>
                </CardInfoDashboard>
                <CardInfoDashboard title="Pengajuan Diterima" value="831">
                    <div class="bg-cyan-800 p-2 rounded-full">
                        <CircleCheckIcon />
                    </div>
                </CardInfoDashboard>
                <CardInfoDashboard title="Pengajuan Ditolak" value="12">
                    <div class="bg-red-950 p-2 rounded-full">
                        <StopSignIcon />
                    </div>
                </CardInfoDashboard>
            </div>
        </div>
        <div class="pb-6">
            <div class="mx-auto max-w-7xl px-6 lg:px-8 grid grid-cols-1 gap-6 md:grid-cols-2 ">
                <div class="overflow-hidden bg-white shadow-sm rounded-lg dark:bg-gray-800 p-6">
                    <p class="mb-5 font-medium text-lg">Quick Actions</p>
                    <div class="grid grid-cols-2 gap-4">
                        <PrimaryButton>
                            <CirclePlusIcon />
                            Hello
                        </PrimaryButton>
                        <PrimaryButtonOutline>
                            Test
                        </PrimaryButtonOutline>
                        <PrimaryButtonOutline>
                            Test
                        </PrimaryButtonOutline>
                        <PrimaryButtonOutline>
                            Test
                        </PrimaryButtonOutline>
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
                                        Pengajuan 1 - Said Aqil (2010031001)
                                    </p>
                                </div>
                                <div class="text-sm text-gray-500 dark:text-gray-200">Kemarin, 13:00 AM </div>
                            </div>
                        </div>
                        <div class="flex gap-4 items-center border-b border-gray-100 pb-2">
                            <div>
                                <CalendarIcon />
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-gray-800 dark:text-gray-200">
                                    <p>
                                        Pengajuan 1 - Said Aqil (2010031001)
                                    </p>
                                </div>
                                <div class="text-sm text-gray-500 dark:text-gray-200"> 14:00 Selasa, 12 Januari 2025
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-4 items-center ">
                            <div>
                                <CalendarIcon />
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-gray-800 dark:text-gray-200">
                                    <p>
                                        Pengajuan 1 - Said Aqil (2010031001)
                                    </p>
                                </div>
                                <div class="text-sm text-gray-500 dark:text-gray-200">12/12/2021</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pb-6">
            <div class="mx-auto max-w-7xl px-6 lg:px-8 ">
                <div class="overflow-hidden bg-white shadow-sm rounded-lg dark:bg-gray-800 p-6">
                    <p class="mb-5 font-medium text-lg">Status Skripsi</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4">
                        <div class="bg-neutral-100 p-4 rounded">
                            <div class="flex justify-between items-center mb-4">
                                <p class="font-medium ">Proposal</p>
                                <a href="#" class="text-primary-400 text-sm">
                                    <ArrowRightIcon color="#037967" />
                                </a>
                            </div>
                            <div class="flex flex-col gap-2">
                                <div class="p-4 bg-white rounded-lg shadow-sm">
                                    <p class="text-sm">
                                        Implementasi AI di bidang Kesehatan
                                    </p>
                                    <p class="text-gray-500 text-sm mt-1">
                                        Aqil Said (2010031001)
                                    </p>
                                </div>
                                <div class="p-4 bg-white rounded-lg shadow-sm">
                                    <p class="text-sm">
                                        Optimalisasi Sistem Informasi di Perusahaan X
                                    </p>
                                    <p class="text-gray-500 text-sm mt-1">
                                        Aqil Said (2010031001)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-neutral-100 p-4 rounded">
                            <div class="flex justify-between items-center mb-4">
                                <p class="font-medium">Review Dosen Pembimbing</p>
                                <a href="#" class="text-primary-400 text-sm">
                                    <ArrowRightIcon color="#037967" />
                                </a>
                            </div>
                            <div class="flex flex-col gap-2">
                                <div class="p-4 bg-white rounded-lg shadow-sm">
                                    <p class="text-sm">
                                        Implementasi AI di bidang Kesehatan
                                    </p>
                                    <p class="text-gray-500 text-sm mt-1">
                                        Aqil Said (2010031001)
                                    </p>
                                </div>
                                <div class="p-4 bg-white rounded-lg shadow-sm">
                                    <p class="text-sm">
                                        Optimalisasi Sistem Informasi di Perusahaan X
                                    </p>
                                    <p class="text-gray-500 text-sm mt-1">
                                        Aqil Said (2010031001)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-neutral-100 p-4 rounded">
                            <div class="flex justify-between items-center mb-4">
                                <p class="font-medium">Review Kaprodi</p>
                                <a href="#" class="text-primary-400 text-sm">
                                    <ArrowRightIcon color="#037967" />
                                </a>
                            </div>
                            <div class="flex flex-col gap-2">
                                <div class="p-4 bg-white rounded-lg shadow-sm">
                                    <p class="text-sm">
                                        Implementasi AI di bidang Kesehatan
                                    </p>
                                    <p class="text-gray-500 text-sm mt-1">
                                        Aqil Said (2010031001)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-neutral-100 p-4 rounded">
                            <div class="flex justify-between items-center mb-4">
                                <p class="font-medium">Selesai</p>
                                <a href="#" class="text-primary-400 text-sm">
                                    <ArrowRightIcon color="#037967" />
                                </a>
                            </div>
                            <div class="flex flex-col gap-2">
                                <div class="p-4 bg-white rounded-lg shadow-sm">
                                    <p class="text-sm">
                                        Implementasi AI di bidang Kesehatan
                                    </p>
                                    <p class="text-gray-500 text-sm mt-1">
                                        Aqil Said (2010031001)
                                    </p>
                                </div>
                                <div class="p-4 bg-white rounded-lg shadow-sm">
                                    <p class="text-sm">
                                        Implementasi AI di bidang Kesehatan
                                    </p>
                                    <p class="text-gray-500 text-sm mt-1">
                                        Aqil Said (2010031001)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pb-6">
            <div class="mx-auto max-w-7xl px-6 lg:px-8 grid grid-cols-1 gap-6 md:grid-cols-2">
                <div class="overflow-hidden bg-white shadow-sm rounded-lg dark:bg-gray-800 p-6">
                    <p class="mb-5 font-medium text-lg">Log Aktifitas</p>
                    <div class="grid grid-cols-1 gap-4 relative">
                        <div class="absolute h-full">
                            <!-- border vertical -->
                            <div class="border-r-2 border-gray-200 h-full absolute top-0 left-4"></div>
                        </div>
                        <div class="flex justify-between items-center z-10">
                            <div class="flex items-center gap-3">
                                <div class="bg-primary-300 p-1 rounded-full w-fit">
                                    <CircleCheckIcon />
                                </div>
                                <p>
                                    Skripsi telah disetujui oleh <span class="font-semibold">Dosen Pembimbing I</span>
                                </p>
                            </div>
                            <small>
                                3 menit yang lalu
                            </small>
                        </div>
                        <div class="flex justify-between items-center z-10">
                            <div class="flex items-center gap-3">
                                <div class="bg-primary-300 p-1 rounded-full w-fit">
                                    <ChatCitcleDotsIcon />
                                </div>
                                <p>
                                    Skripsi telah dikomentari oleh <span class="font-semibold">Dosen Pembimbing I</span>
                                </p>
                            </div>
                            <small>
                                3 menit yang lalu
                            </small>
                        </div>
                        <div class="flex justify-between items-center z-10">
                            <div class="flex items-center gap-3">
                                <div class="bg-primary-300 p-1 rounded-full w-fit">
                                    <ChatCitcleDotsIcon />
                                </div>
                                <p>
                                    Skripsi telah dikomentari oleh <span class="font-semibold">Dosen Pembimbing I</span>
                                </p>
                            </div>
                            <small>
                                3 menit yang lalu
                            </small>
                        </div>
                    </div>
                </div>
                <div class="overflow-hidden bg-white shadow-sm rounded-lg dark:bg-gray-800 p-6">
                    <p class="mb-5 font-medium text-lg">Dokumen Acuan</p>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex justify-between items-center bg-gray-100 p-4 rounded">
                            <div class="flex items-center gap-3">
                                <PdfIcon />
                                <p class="">Panduan Skripsi</p>
                            </div>
                            <button>
                                <FileDownloadIcon color="#000" />
                            </button>
                        </div>
                        <div class="flex justify-between items-center bg-gray-100 p-4 rounded">
                            <div class="flex items-center gap-3">
                                <WordIcon />
                                <p class="">Panduan Skripsi</p>
                            </div>
                            <button>
                                <FileDownloadIcon color="#000" />
                            </button>
                        </div>
                        <div class="flex justify-between items-center bg-gray-100 p-4 rounded">
                            <div class="flex items-center gap-3">
                                <ExcelIcon />
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