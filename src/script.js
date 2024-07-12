const infoMap = {
    a: {
        name: "Rohayah", phone: "0882003097698", school: "SMK N 1 Kawunganten", image: "src/foto/Rohayah.jpg",
        device_specification: {
            device: "PC", processor: "Intel(R) Core(TM) i5-7400 CPU @3.00GHz (4CPUs), ~3.0GHz",
            ram: 8192, vga: "NVIDIA GeForce GT 1030"
        },
    },
    b: {
        name: "Rani", phone: "083145812351", school: "SMK N 1 Kawunganten", image: "src/foto/Rani.jpg",
        device_specification: {
            device: "PC", processor: "11th Gen Intel(R) Core(TM) i7-11700F @2.50GHz (16CPUs), ~2.5GHz",
            ram: 32678, vga: "NVIDIA GeForce GT 1030"
        },
    },
    c: {
        name: "Zhara", phone: "085865305316", school: "SMK N 1 Kawunganten", image: "src/foto/Zhara.jpg",
        device_specification: {
            device: "PC", processor: "Intel(R) Core(TM) i5-7400 CPU @3.00GHz (4CPUs), ~3.0GHz",
            ram: 8192, vga: "NVIDIA GeForce GTX 960"
        },
    },
    d: {
        name: "Najwa", phone: "087872383191", school: "SMK N 1 Kebumen", image: "src/foto/Najwa.jpg",
        device_specification: {
            device: "PC", processor: "Intel(R) Core(TM) i5-7400 CPU @3.00GHz (4CPUs), ~3.0GHz",
            ram: 16384, vga: "AMD Radeon (TM) R9 380 Series"
        },
    },
    e: {
        name: "Siska", phone: "081228354023", school: "SMK N 1 Kawunganten", image: "src/foto/Siska.jpg",
        device_specification: {
            device: "PC", processor: "AMD Ryzen 5 4600G with Radeon Graphics (12CPUs), ~3.7GHz",
            ram: 65536, vga: "NVIDIA GeForce RTX 3060"
        },
    },
    f: {
        name: "Ainun", phone: "085600894635", school: "SMK N 1 Kawunganten", image: "src/foto/Ainun.jpg",
        device_specification: {
            device: "PC", processor: "AMD Ryzen 3 PRO 4350G with Radeon Graphics (8CPUs), ~3.8GHz",
            ram: 32768, vga: "NVIDIA GeForce GT 220"
        },
    },
    g: {
        name: "Stevi", phone: "0895357435932", school: "SMK N 1 Kawunganten", image: "src/foto/Stevi.jpg",
        device_specification: {
            device: "PC", processor: "AMD Ryzen 3 4100 4-Core Processor",
            ram: 49152, vga: "NVIDIA GeForce GTX 1660 SUPER"
        },
    },
    h: {
        name: "Febri", phone: "088221887265", school: "SMK N 1 Kawunganten", image: "src/foto/Febri.jpg",
        device_specification: {
            device: "PC", processor: "AMD Ryzen 5 4600G with Radeon Graphics (12CPUs), ~3.7GHz",
            ram: 24576, vga: "AMD Radeon Graphics Processor (0x1636)"
        },
    },
    i: {
        name: "Fani", phone: "088216458968", school: "SMK N 1 Kawunganten", image: "src/foto/Fani.jpg",
        device_specification: {
            device: "PC", processor: "AMD Ryzen 3 4100 4-Core Processor",
            ram: 16384, vga: "NVIDIA GeForce GT 1030"
        },
    },
    j: {
        name: "Sekar", phone: "082257975181", school: "SMK N 1 Kawunganten", image: "src/foto/Sekar.jpg",
        device_specification: {
            device: "PC", processor: "AMD Ryzen 5 4600G with Radeon Graphics (12CPUs), ~3.7GHz",
            ram: 32768, vga: "AMD Radeon Graphics Processor (0x1636)"
        },
    },
    // k: {
    //     name: "Gading", phone: "085741188957", school: "Universitas Telkom", image: "src/foto/Gading.jpg",
    //     device_specification: {
    //         device: "Laptop", processor: "AMD Ryzen 7 4800H with Radeon Graphics (16 CPUs), ~2.9GHz",
    //         ram: 16384, vga: "NVIDIA Geforce GTX 1650 Ti"
    //     },
    // },
    l: {
        name: "Purwati", phone: "085725805329", school: "SMK N 1 Kawunganten", image: "src/foto/Purwati.jpg",
        device_specification: {
            device: "Laptop", processor: "Intel(R) Core(TM) i5-4210H CPU @ 2.90GHz (4 CPUs), ~2.9GHz",
            ram: 16384, vga: ""
        },
    },
    m: {
        name: "Bintang", phone: "081567670616", school: "SMK N 1 Kawunganten", image: "src/foto/Bintang.jpg",
        device_specification: {
            device: "Laptop", processor: "AMD Ryzen 5 5500U with Radeon Graphics",
            ram: 8192, vga: ""
        },
    },
    n: {
        name: "Dheni", phone: "085641190307", school: "SMK N 1 Kawunganten", image: "src/foto/Dheni.jpg",
        device_specification: {
            device: "Laptop", processor: "Intel(R) Core(TM) i7-6700HQ CPU @ 2.60GHz (8CPUs)",
            ram: 16384, vga: ""
        },
    },
    o: {
        name: "Sidik", phone: "0882005720963", school: "SMK N 1 Kawunganten", image: "src/foto/Sidik.jpg",
        device_specification: {
            device: "Laptop", processor: "Intel(R) Core(TM) i5-7200 CPU @ 2.50GHz (4 CPUs), ~2.7GHz",
            ram: 8192, vga: ""
        },
    },
    p: {
        name: "Haykal", phone: "089603633930", school: "SMK N 1 Kebumen", image: "src/foto/Haykal.jpg",
        device_specification: {
            device: "Laptop", processor: "12th Gen Intel(R) Core(TM) i5-12450HX (12 CPUs), ~2.4GHz",
            ram: 12288, vga: "NVIDIA GeForce RTX 3050 6GB Laptop GPU"
        },
    },
    q: {
        name: "Ghani", phone: "087794710749", school: "SMK N 1 Kebumen", image: "src/foto/Ghani.jpg",
        device_specification: {
            device: "Laptop", processor: "AMD Ryzen 3 3250U with Radeon Graphics",
            ram: 8192, vga: ""
        },
    },
    u: {
        name: "Gading", phone: "085741188957", school: "Universitas Telkom", image: "src/foto/Gading.jpg",
        device_specification: {
            device: "Laptop", processor: "AMD Ryzen 7 4800H with Radeon Graphics (16 CPUs), ~2.9GHz",
            ram: 16384, vga: "NVIDIA Geforce GTX 1650 Ti"
        },
    },
    
    // Tambahkan data lain sesuai kebutuhan
};


function showInfo(area) {
    
    const info = infoMap[area];

    if (info) {
        console.log("clicked");
        console.log(info.image);
        $('#personal-name').text(info.name);
        $('#personal-phone').text(info.phone);
        $('#personal-school').text(info.school);
        $('#personal-picture').attr('src', info.image);
        $('#device').text(info.device_specification.device);
        $('#processor').text(info.device_specification.processor);
        $('#ram').text(info.device_specification.ram);
        $('#vga').text(info.device_specification.vga);
        $('#picture, #personal-info, #specification').removeClass('hidden');
    }
}