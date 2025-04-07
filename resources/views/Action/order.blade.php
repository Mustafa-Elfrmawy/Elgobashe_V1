@extends('layout/layout_action')

@section('content_2')
@section('title')
    Add Order Form
@endsection

<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img src="../assets/images/logo-icon.png" alt="Logo" class="dark-logo"
                                style="width: 50px;">
                            <h3>GHO - Order Form</h3>
                        </div>
                        <form id="orderForm">

                            <a class="back-home" role="button" title="Back Home" href="{{route('index')}}">&#8617;</a>

                            <div class="mb-3">
                                <label for="orderCode" class="form-label">كود الامر</label>
                                <input type="text" id="orderCode" name="orderCode" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="orderDate" class="form-label">التاريخ</label>
                                <input type="date" id="orderDate" name="orderDate" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="client" class="form-label">العميل</label>
                                <input type="text" id="client" name="client" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="itemNumber" class="form-label">رقم الصنف</label>
                                <input type="text" id="itemNumber" name="itemNumber" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="itemName" class="form-label">اسم الصنف</label>
                                <input type="text" id="itemName" name="itemName" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="lamaa" class="form-label">اللمعه</label>
                                <input type="text" id="lamaa" name="lamaa" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="cartonType" class="form-label">نوع الكرتون</label>
                                <input type="text" id="cartonType" name="cartonType" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="additions" class="form-label">الاضافات</label>
                                <input type="text" id="additions" name="additions" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="printing" class="form-label">الطباعه</label>
                                <input type="text" id="printing" name="printing" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="paperType" class="form-label">نوع الورق</label>
                                <input type="text" id="paperType" name="paperType" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="farakhSize" class="form-label">مقاس الفرخ</label>
                                <input type="text" id="farakhSize" name="farakhSize" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="individual" class="form-label">الإفراد</label>
                                <input type="text" id="individual" name="individual" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="knife" class="form-label">السكينه</label>
                                <input type="text" id="knife" name="knife" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="stamp" class="form-label">الاسطمبه</label>
                                <input type="text" id="stamp" name="stamp" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="netKnife" class="form-label">صافى السكينه</label>
                                <input type="text" id="netKnife" name="netKnife" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="quantityFarakh" class="form-label">الكميه بالفرخ</label>
                                <input type="number" id="quantityFarakh" name="quantityFarakh"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="quantityBoxes" class="form-label">الكميه بالعلب</label>
                                <input type="number" id="quantityBoxes" name="quantityBoxes" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">إحفظ الطلب</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
