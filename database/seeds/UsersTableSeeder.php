<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // times 和 make 方法是由 FactoryBuilder 类 提供的 API。times 接受一个参数用于指定要创建的模型数量，make 方法调用后将为模型创建一个 集合。最后我们还使用了 insert 方法来将生成假用户列表数据批量插入到数据库中。
        $users = factory(User::class)->times(50)->make();
        User::insert($users->toArray());
    }
}
