<template>
    <div class="w-full p-3 rounded-md shadow-md ">
        <div class="text-2xl ">
            <span class="font-bold uppercase ">my request</span>
            <span class="p-0 mx-5 bg-green-500 badge size-5"></span>
            <span>= Done,</span>
            <span class="p-0 mx-5 bg-yellow-500 badge size-5"></span>
            <span>= Not Yet,</span>
            <span class="p-0 mx-5 bg-white border-2 badge size-5"></span>
            <span>= Do Nothing,</span>
            <span class="p-0 mx-5 bg-slate-300 badge size-5"></span>
            <span>= Cancel</span>
        </div>
        <div class="mt-3 mb-3 divider divider-neutral"></div>
        <div class="w-full border rounded-lg border-base-content/25">
            <div class="overflow-x-auto">
                <table class="table rounded">
                    <thead>
                        <tr class="bg-blue-300">
                            <th  class="text-xl font-semibold">Order</th>
                            <th  class="text-xl font-semibold">Requst Number</th>
                            <th  class="text-xl font-semibold">Category</th>
                            <th  class="text-xl font-semibold">Items</th>
                            <th  class="text-xl font-semibold">By User</th>
                            <th  class="text-xl font-semibold">Request Date</th>
                            <th  class="text-xl font-semibold">Detail</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>