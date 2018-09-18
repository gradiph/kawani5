<?php

use Illuminate\Database\Seeder;

class DevelopmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ErrorLogsTableSeeder::class);
        $this->call(ExpensesTableSeeder::class);
        $this->call(IncomesTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(PurchasesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(SizesTableSeeder::class);
        $this->call(SuppliersTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        $this->call(StoresTableSeeder::class);
        $this->call(PromosTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SalesTableSeeder::class);
        $this->call(VisitorsTableSeeder::class);
        $this->call(StockOpnamesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(UserLogsTableSeeder::class);
        $this->call(StocksTableSeeder::class);
        $this->call(MutationsTableSeeder::class);
        $this->call(CashierReturnsTableSeeder::class);
        $this->call(SupplierReturnsTableSeeder::class);
        $this->call(SaleDetailsTableSeeder::class);
        $this->call(DiscountsTableSeeder::class);
        $this->call(CustomerReturnsTableSeeder::class);
        $this->call(PaymentSaleTableSeeder::class);
        $this->call(ProductPurchaseTableSeeder::class);
        $this->call(PromoStockTableSeeder::class);
        $this->call(ProductStockOpnameTableSeeder::class);
        $this->call(PromoRequirementTableSeeder::class);
        $this->call(MutationStockTableSeeder::class);
    }
}
