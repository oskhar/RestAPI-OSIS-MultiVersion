<style>
.custom-bg {
  background-image: url("./images/wallpaper.jpg");
  background-size: 100% auto;
  background-position: bottom; /* Untuk menempatkan gambar di tengah */
  height: 100vh;
}
</style>
<template>
  <main class="d-flex flex-column gap-10">
    <VRow tag="section" class="position-relative custom-bg w-100">
      <VCol cols="12" md="9" class="px-5 mx-auto">
        <VRow class="d-flex justify-space-between">
          <VCol
            cols="12"
            md="7"
            class="mt-12 d-flex align-center justify-center text-white"
            style="height: 90vh"
          >
            <VRow>
              <VCol cols="12">
                <img
                  src="/images/logo_osis.svg"
                  alt=""
                  width="150"
                  outline
                  class="elevation-5 rounded"
                />
                <h1 class="text-white">Sambutan Ketua OSIS</h1>
              </VCol>
              <VCol cols="12">
                <p>
                  Web OSIS adalah platform yang berfungsi sebagai perantara dan
                  media informasi bagi OSIS, memfasilitasi siswa dalam
                  mengembangkan prestasi dan potensi mereka secara bersama-sama.
                  Platform ini juga membantu melancarkan berbagai kegiatan OSIS
                  dengan menyediakan informasi yang mendetail dan terstruktur,
                  sehingga mempermudah koordinasi dan pelaksanaan aktivitas
                  sekolah.
                </p>
              </VCol>
            </VRow>
          </VCol>
        </VRow>
      </VCol>
    </VRow>
    <VRow class="w-100">
      <VCol cols="12" md="9" class="px-5 mx-auto">
        <center>
          <h1 style="font-weight: 100">ORGANISASI SISWA INTRA SEKOLAH</h1>
          <h1>SMAN 96 JAKARTA</h1>
          <p class="mt-3">
            OSIS adalah Organisasi siswa RESMI sebagai penyelenggara kegiatan
            kegiatan sekolah serta mengaktifkan keorganisasian siswa di sekolah
          </p>
          <br />
          <h1>OSIS PERIODE 2020 - 2021</h1>
          <img
            class="mt-3"
            src="/images/osis2020.webp"
            alt="foto angkatan"
            height="600"
            style="border-radius: 50%"
          />
        </center>
      </VCol>
    </VRow>
  </main>
</template>
<script>
export default {};
</script>
