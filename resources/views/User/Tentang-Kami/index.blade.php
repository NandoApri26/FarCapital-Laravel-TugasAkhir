@extends('Template-User.main')
@section('title', 'PB. Mandiri Palembang || Tentang Kami')
@section('content')

<!-- ===== Start Tentang Kami ===== -->
<section id="TentangKami">
    <div class="container">

        <div class="pt-20 font-poopins font-bold text-[48px] text-center text-[#BBBBBB]">
            <h1 class="border-b-4 border-[#FF8787] w-90 mx-auto">Sejarah Berdiri</h1>
        </div>

        <div class="flex mt-20 bg-gray-200 rounded-2xl cursor-pointer">
            <div class="">
                <img src="{{asset('Template-User/asset/profile.jpg')}}" class="rounded-lg w-[453px] h-[496px] object-fill items-center" alt="...">
            </div>
            <div class=" md:h-[420px] mt-10">
                <div class="px-10 font-poopins">
                    <h1 class="font-bold text-3xl text-[#767676]  text-center">Agoes Saputra Pratama</h1>
                    <p class="text-[#767676] mt-5 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque blanditiis at illum ipsa nihil magnam repellat explicabo nostrum sequi, tempora eius assumenda! Esse ratione ab voluptates quae, eligendi qui aut illo dolorem repellat dicta rem ullam temporibus quam repudiandae labore. Officia earum veritatis iure est ex, fuga impedit aliquam id ab eos quos dolores vitae, iste inventore commodi rem perferendis nisi deserunt animi iusto eius, dolorem magni. Sint at totam quidem quibusdam. Qui dolor quo eum voluptates assumenda aliquid in ipsam beatae officia, esse et incidunt sunt nihil error perspiciatis. Ipsum necessitatibus doloremque ea error dolorem expedita autem officia dolor blanditiis quas quo, aliquam maxime minima corporis distinctio natus magnam alias quam cupiditate fugit hic recusandae molestias. Deleniti culpa cupiditate totam laborum porro magni deserunt dicta aperiam eum? Repellendus labore rerum hic ab, obcaecati nemo debitis doloribus perferendis pariatur fugiat dolor voluptatem quam necessitatibus nostrum quis quasi molestiae inventore similique quidem. Neque officia, ea, ipsa earum beatae est quasi voluptatibus ipsam, ullam vel asperiores enim explicabo? Totam voluptas libero, iusto possimus ab debitis sequi tenetur nam ipsa reiciendis, deleniti facere aliquid aperiam. Aspernatur, impedit sunt, dolore at neque ipsam officiis architecto qui pariatur deleniti ea reprehenderit eos eligendi exercitationem. Rem.</p>
                </div>
            </div>
        </div>
        
</section>
<!-- ===== End Tentang Kami ===== -->

<!-- ===== Start Visi Misi ===== -->
<section id="MisiMisi">
    <div class="container">
        <div class="pt-40 font-poopins font-bold text-[48px] text-center text-[#BBBBBB]">
            <h1 class="border-b-4 border-[#FF8787] w-44 mx-auto">Visi Misi</h1>
        </div>
        <div class="flex gap-20 pt-[50px] cursor-pointer">
            <div class="bg-white shadow-md shadow-gray-600 rounded-2xl transition-all duration-500 hover:scale-105">
                <div class="mx-24 my-10 shadow-sm shadow-gray-600 rounded-2xl">
                    <h1 class="p-5 text-center">VISI</h1>
                </div>
                <div class="px-10">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit consectetur optio repudiandae laborum itaque assumenda non? Voluptas error placeat beatae dolores minima ipsum ea laborum vero minus veritatis, enim animi aperiam! Fuga praesentium voluptatum magni quis doloremque rerum fugiat aliquid adipisci, dolor incidunt corporis facilis quidem dolorem iste molestiae voluptatem reprehenderit nisi earum vero maiores recusandae. Quod nostrum quo aliquid, recusandae autem magnam doloremque repudiandae ab hic cum rerum nobis praesentium necessitatibus sapiente doloribus nihil ducimus quas aspernatur alias possimus consectetur? Sunt animi aperiam minus, repellat saepe reiciendis laborum hic nostrum rerum quos. Culpa, temporibus totam facilis exercitationem sint fugiat!</p>
                </div>
            </div>
            <div class="bg-white shadow-md shadow-gray-600 rounded-2xl transition-all duration-250 hover:scale-105">
                <div class="mx-24 my-10 shadow-sm shadow-gray-600 rounded-2xl">
                    <h1 class="p-5 text-center">VISI</h1>
                </div>
                <div class="px-10">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit consectetur optio repudiandae laborum itaque assumenda non? Voluptas error placeat beatae dolores minima ipsum ea laborum vero minus veritatis, enim animi aperiam! Fuga praesentium voluptatum magni quis doloremque rerum fugiat aliquid adipisci, dolor incidunt corporis facilis quidem dolorem iste molestiae voluptatem reprehenderit nisi earum vero maiores recusandae. Quod nostrum quo aliquid, recusandae autem magnam doloremque repudiandae ab hic cum rerum nobis praesentium necessitatibus sapiente doloribus nihil ducimus quas aspernatur alias possimus consectetur? Sunt animi aperiam minus, repellat saepe reiciendis laborum hic nostrum rerum quos. Culpa, temporibus totam facilis exercitationem sint fugiat!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===== End Visi Misi ===== -->

@endsection