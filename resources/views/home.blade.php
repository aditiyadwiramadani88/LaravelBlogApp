

@extends('index')

@section('home')
 <div class=" container-lg mx-auto">
      <div class="w-full">
          <div class="grid md:grid-cols-2  gap-x-86 md:ml-4">
              <div class="ml-2 mt-4 pt-8 mx-auto">
                <p class="text-3xl text-blue-400"><b class="text-blue-400">Aditiya </b><b class="text-red-400">Blog</b></p>
                <p class="text-gray-600">

                        <p>Selamat datang di Blog Kami - pusat pengetahuan terdepan untuk pemrograman, cyber security dan digital marketing!
                        <p>Kembangkan keterampilan Anda, tingkatkan keamanan online, dan capai kesuksesan dalam bisnis digital dengan panduan dan wawasan terbaru dari Blog Kami menyatukan keahlian dalam tiga bidang penting untuk menghadapi era teknologi yang semakin maju</p>
            </p>

                <button class="bg-blue-500 text-white h-9 w-32 shadow-md rounded-md cursor-pointer" onclick="location.href='/all_post'">Selengkapnya</button>
              </div>
              <div class="flex justify-center">
                  <img class=" cursor-pointer" src="/img/business-blogging-concept-commercial-blog-posting-internet-blogging-service-flat-design-illustration-vector-removebg-preview.png" alt="image">
              </div>
          </div>







          <div class="grid md:grid-cols-3 gap-3  w-9/12 mx-auto mt-8">

              <div class="max-w-sm rounded overflow-hidden shadow-lg">
      <img class="w-full" src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Pemograman">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Pemograman</div>
        <p class="text-gray-700 text-sm">
        Pemrograman: Mulailah perjalanan Anda dalam dunia pemrograman dengan tutorial langkah demi langkah, tips praktis, dan sumber daya terkini. Dari bahasa pemrograman populer hingga framework dan alat pengembangan terbaru, kami membantu Anda memahami konsep dan meningkatkan keterampilan pemrograman Anda
        </p>
      </div>

    </div>
              <div class="max-w-sm rounded overflow-hidden shadow-lg">
      <img class="w-full" src="https://images.unsplash.com/photo-1640552435388-a54879e72b28?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Linux Neofetch">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Cyber Security</div>
        <p class="text-gray-700 text-sm">
         Cyber Security:Belajar Lindungi diri Anda dan data pribadi Anda dengan praktik keamanan cyber terbaik. Temukan panduan yang relevan tentang keamanan jaringan, enkripsi, dan langkah-langkah pencegahan terhadap serangan siber. Dapatkan pemahaman yang kuat tentang ancaman keamanan cyber dan jaga keamanan online Anda.
        </p>
      </div>

    </div>
              <div class="max-w-sm rounded overflow-hidden shadow-lg">
      <img class="w-full" src="https://images.unsplash.com/photo-1661956600684-97d3a4320e45?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Digital Marketing Laptop Users">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Digtal Marketing</div>
        <p class="text-gray-700 text-sm">
        Digital Marketing: Kuasai strategi pemasaran digital dengan panduan praktis dari ahli kami. Dari optimisasi mesin pencari (SEO) hingga kampanye periklanan digital yang efektif, kami memberikan wawasan yang dapat meningkatkan bisnis Anda. Ambil manfaat dari media sosial dan analisis data untuk meraih kesuksesan pemasaran digital.
        </p>
      </div>

    </div>
          </div>







      </div>
  </div>

@endsection
