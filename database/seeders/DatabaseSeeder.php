<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Asyifa Maulana',
            'username' => 'Asyifa Maulana',
            'email' => 'maulana@gmail.com',
            'password' => bcrypt('qwerty')
        ]);
        // User::create([
        //     'name' => 'Maulana Subuh',
        //     'email' => 'kuroslash3@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' =>1,
        //     'user_id' =>1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique varius nisi sed vestibulum. Vivamus vel arcu orci. Suspendisse mattis nibh eu mauris tempor rhoncus finibus ut tellus. Quisque vitae consequat justo.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique varius nisi sed vestibulum. Vivamus vel arcu orci. Suspendisse mattis nibh eu mauris tempor rhoncus finibus ut tellus. Quisque vitae consequat justo. Sed non mi porttitor, egestas magna ut, venenatis eros. Nulla pharetra erat diam, malesuada iaculis est gravida eu. Phasellus nisl mauris, tempor a lacus non, varius lobortis metus. Ut pulvinar massa mauris, a dapibus erat finibus vitae. Suspendisse porttitor, massa et faucibus blandit, libero dui cursus nisi, in egestas eros justo eget nisl.</p><p>Morbi in ligula sollicitudin, maximus nibh a, ultrices ipsum. Fusce sagittis dui vel ante tincidunt, vitae faucibus mi ornare. Phasellus convallis iaculis quam vitae consectetur. Etiam purus risus, sodales eu nisl vel, lobortis suscipit dolor. Mauris a enim ipsum. Etiam ut libero sollicitudin, varius enim id, faucibus tortor. Fusce condimentum ut enim a mattis. Cras dapibus, metus et ornare vestibulum, nisi est elementum justo, et interdum est velit id lorem. Nam ac euismod lorem, in sagittis nisl. Fusce vulputate nisi eu congue consequat. Fusce ac purus quis nunc maximus sodales ut at nulla. Maecenas vestibulum dapibus ante non dignissim. Phasellus nec elit eleifend augue fermentum laoreet eu eu diam. Phasellus suscipit neque eu fermentum mattis. Nullam elementum viverra elit in finibus. Etiam rhoncus augue vel efficitur posuere.</p><p>Cras faucibus posuere fringilla. Nunc auctor tortor enim. In vel vehicula tortor, vel faucibus ante. Donec in auctor urna. Vestibulum placerat leo eget justo molestie, vel sollicitudin elit vehicula. Aenean fringilla elit ac pulvinar malesuada. Vestibulum feugiat et metus auctor facilisis. Quisque ut metus neque. Morbi sem nibh, sagittis in aliquet vel, dapibus vel augue. Pellentesque eu ipsum at odio laoreet ornare. Proin et congue nulla. Morbi dapibus lectus urna, vel sollicitudin nunc facilisis at. Morbi aliquet ac augue id lacinia. Phasellus tristique tellus eu placerat euismod.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'category_id' =>1,
        //     'user_id' =>1,
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique varius nisi sed vestibulum. Vivamus vel arcu orci. Suspendisse mattis nibh eu mauris tempor rhoncus finibus ut tellus. Quisque vitae consequat justo.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique varius nisi sed vestibulum. Vivamus vel arcu orci. Suspendisse mattis nibh eu mauris tempor rhoncus finibus ut tellus. Quisque vitae consequat justo. Sed non mi porttitor, egestas magna ut, venenatis eros. Nulla pharetra erat diam, malesuada iaculis est gravida eu. Phasellus nisl mauris, tempor a lacus non, varius lobortis metus. Ut pulvinar massa mauris, a dapibus erat finibus vitae. Suspendisse porttitor, massa et faucibus blandit, libero dui cursus nisi, in egestas eros justo eget nisl.</p><p>Morbi in ligula sollicitudin, maximus nibh a, ultrices ipsum. Fusce sagittis dui vel ante tincidunt, vitae faucibus mi ornare. Phasellus convallis iaculis quam vitae consectetur. Etiam purus risus, sodales eu nisl vel, lobortis suscipit dolor. Mauris a enim ipsum. Etiam ut libero sollicitudin, varius enim id, faucibus tortor. Fusce condimentum ut enim a mattis. Cras dapibus, metus et ornare vestibulum, nisi est elementum justo, et interdum est velit id lorem. Nam ac euismod lorem, in sagittis nisl. Fusce vulputate nisi eu congue consequat. Fusce ac purus quis nunc maximus sodales ut at nulla. Maecenas vestibulum dapibus ante non dignissim. Phasellus nec elit eleifend augue fermentum laoreet eu eu diam. Phasellus suscipit neque eu fermentum mattis. Nullam elementum viverra elit in finibus. Etiam rhoncus augue vel efficitur posuere.</p><p>Cras faucibus posuere fringilla. Nunc auctor tortor enim. In vel vehicula tortor, vel faucibus ante. Donec in auctor urna. Vestibulum placerat leo eget justo molestie, vel sollicitudin elit vehicula. Aenean fringilla elit ac pulvinar malesuada. Vestibulum feugiat et metus auctor facilisis. Quisque ut metus neque. Morbi sem nibh, sagittis in aliquet vel, dapibus vel augue. Pellentesque eu ipsum at odio laoreet ornare. Proin et congue nulla. Morbi dapibus lectus urna, vel sollicitudin nunc facilisis at. Morbi aliquet ac augue id lacinia. Phasellus tristique tellus eu placerat euismod.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'category_id' =>2,
        //     'user_id' =>1,
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique varius nisi sed vestibulum. Vivamus vel arcu orci. Suspendisse mattis nibh eu mauris tempor rhoncus finibus ut tellus. Quisque vitae consequat justo.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique varius nisi sed vestibulum. Vivamus vel arcu orci. Suspendisse mattis nibh eu mauris tempor rhoncus finibus ut tellus. Quisque vitae consequat justo. Sed non mi porttitor, egestas magna ut, venenatis eros. Nulla pharetra erat diam, malesuada iaculis est gravida eu. Phasellus nisl mauris, tempor a lacus non, varius lobortis metus. Ut pulvinar massa mauris, a dapibus erat finibus vitae. Suspendisse porttitor, massa et faucibus blandit, libero dui cursus nisi, in egestas eros justo eget nisl.</p><p>Morbi in ligula sollicitudin, maximus nibh a, ultrices ipsum. Fusce sagittis dui vel ante tincidunt, vitae faucibus mi ornare. Phasellus convallis iaculis quam vitae consectetur. Etiam purus risus, sodales eu nisl vel, lobortis suscipit dolor. Mauris a enim ipsum. Etiam ut libero sollicitudin, varius enim id, faucibus tortor. Fusce condimentum ut enim a mattis. Cras dapibus, metus et ornare vestibulum, nisi est elementum justo, et interdum est velit id lorem. Nam ac euismod lorem, in sagittis nisl. Fusce vulputate nisi eu congue consequat. Fusce ac purus quis nunc maximus sodales ut at nulla. Maecenas vestibulum dapibus ante non dignissim. Phasellus nec elit eleifend augue fermentum laoreet eu eu diam. Phasellus suscipit neque eu fermentum mattis. Nullam elementum viverra elit in finibus. Etiam rhoncus augue vel efficitur posuere.</p><p>Cras faucibus posuere fringilla. Nunc auctor tortor enim. In vel vehicula tortor, vel faucibus ante. Donec in auctor urna. Vestibulum placerat leo eget justo molestie, vel sollicitudin elit vehicula. Aenean fringilla elit ac pulvinar malesuada. Vestibulum feugiat et metus auctor facilisis. Quisque ut metus neque. Morbi sem nibh, sagittis in aliquet vel, dapibus vel augue. Pellentesque eu ipsum at odio laoreet ornare. Proin et congue nulla. Morbi dapibus lectus urna, vel sollicitudin nunc facilisis at. Morbi aliquet ac augue id lacinia. Phasellus tristique tellus eu placerat euismod.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'category_id' =>2,
        //     'user_id' =>2,
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique varius nisi sed vestibulum. Vivamus vel arcu orci. Suspendisse mattis nibh eu mauris tempor rhoncus finibus ut tellus. Quisque vitae consequat justo.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique varius nisi sed vestibulum. Vivamus vel arcu orci. Suspendisse mattis nibh eu mauris tempor rhoncus finibus ut tellus. Quisque vitae consequat justo. Sed non mi porttitor, egestas magna ut, venenatis eros. Nulla pharetra erat diam, malesuada iaculis est gravida eu. Phasellus nisl mauris, tempor a lacus non, varius lobortis metus. Ut pulvinar massa mauris, a dapibus erat finibus vitae. Suspendisse porttitor, massa et faucibus blandit, libero dui cursus nisi, in egestas eros justo eget nisl.</p><p>Morbi in ligula sollicitudin, maximus nibh a, ultrices ipsum. Fusce sagittis dui vel ante tincidunt, vitae faucibus mi ornare. Phasellus convallis iaculis quam vitae consectetur. Etiam purus risus, sodales eu nisl vel, lobortis suscipit dolor. Mauris a enim ipsum. Etiam ut libero sollicitudin, varius enim id, faucibus tortor. Fusce condimentum ut enim a mattis. Cras dapibus, metus et ornare vestibulum, nisi est elementum justo, et interdum est velit id lorem. Nam ac euismod lorem, in sagittis nisl. Fusce vulputate nisi eu congue consequat. Fusce ac purus quis nunc maximus sodales ut at nulla. Maecenas vestibulum dapibus ante non dignissim. Phasellus nec elit eleifend augue fermentum laoreet eu eu diam. Phasellus suscipit neque eu fermentum mattis. Nullam elementum viverra elit in finibus. Etiam rhoncus augue vel efficitur posuere.</p><p>Cras faucibus posuere fringilla. Nunc auctor tortor enim. In vel vehicula tortor, vel faucibus ante. Donec in auctor urna. Vestibulum placerat leo eget justo molestie, vel sollicitudin elit vehicula. Aenean fringilla elit ac pulvinar malesuada. Vestibulum feugiat et metus auctor facilisis. Quisque ut metus neque. Morbi sem nibh, sagittis in aliquet vel, dapibus vel augue. Pellentesque eu ipsum at odio laoreet ornare. Proin et congue nulla. Morbi dapibus lectus urna, vel sollicitudin nunc facilisis at. Morbi aliquet ac augue id lacinia. Phasellus tristique tellus eu placerat euismod.</p>'
        // ]);

    }
}
