<?= $this->extend('/layouts/template'); ?>

<?= $this->section('content'); ?>


<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-md lg:py-16">
        <h1 class="text-gray-900 dark:text-white text-3xl md:text-4xl font-extrabold mb-2">Apa itu model Computer Vision ?</h1>
        <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">Model computer vision adalah model machine learning atau deep learning yang dirancang khusus untuk memproses dan menganalisis data visual, seperti gambar atau video</p>
        <a href="#" class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
            Detail
            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>
    </div>
</section>

<section class="bg-white dark:bg-gray-900">

    <div class="py-8 px-4 mx-auto max-w-screen-md lg:py-16">

        <h1 class="text-gray-900 text-center dark:text-white text-3xl md:text-3xl font-bold mb-8">Coba Model Machine Learning</h1>

        <ol class="space-y-4 text-gray-500 list-decimal list-inside dark:text-gray-400">
            <li class="font-semibold text-xl">
                <a href="#" class="font-semibold text-xl">RPS Classification</a>
                <p class="ml-5 mb-2 indent-6 text-justify font-normal text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, tempore iure facere voluptate voluptas architecto dignissimos corrupti commodi at. Reprehenderit quo autem modi, inventore qui repellat hic natus corporis cupiditate.</p>
            </li>
            <li class="font-semibold text-xl">
                <a href="#" class="font-semibold text-xl">Gender Classification</a>
                <p class="ml-5 mb-2 indent-6 text-justify font-normal text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nobis facere harum consequatur, sunt nemo quia iusto, sit expedita inventore illo in eos. Similique unde, eveniet quos aut labore vel.</p>
            </li>
            <li class="font-semibold text-xl">
                <a href="#" class="font-semibold text-xl">Animal Classification</a>
                <p class="ml-5 mb-2 indent-6 text-justify font-normal text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, repellat perspiciatis? Perspiciatis atque eligendi ipsa temporibus maxime itaque accusamus soluta asperiores iste commodi vero, nostrum iure eos esse totam tempora?</p>
            </li>
        </ol>

    </div>

</section>


<?= $this->endSection(); ?>