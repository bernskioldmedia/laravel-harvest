<?php

namespace BernskioldMedia\Harvest\Facades;

use BernskioldMedia\Harvest\Resources\Client;
use BernskioldMedia\Harvest\Resources\ClientContact;
use BernskioldMedia\Harvest\Resources\Company;
use BernskioldMedia\Harvest\Resources\Estimate;
use BernskioldMedia\Harvest\Resources\EstimateItemCategory;
use BernskioldMedia\Harvest\Resources\EstimateMessage;
use BernskioldMedia\Harvest\Resources\Expense;
use BernskioldMedia\Harvest\Resources\ExpenseCategory;
use BernskioldMedia\Harvest\Resources\Invoice;
use BernskioldMedia\Harvest\Resources\InvoiceItemCategory;
use BernskioldMedia\Harvest\Resources\InvoiceMessage;
use BernskioldMedia\Harvest\Resources\InvoicePayments;
use BernskioldMedia\Harvest\Resources\Project;
use BernskioldMedia\Harvest\Resources\ProjectTaskAssignment;
use BernskioldMedia\Harvest\Resources\Reports\ExpenseReport;
use BernskioldMedia\Harvest\Resources\Reports\ProjectBudgetReport;
use BernskioldMedia\Harvest\Resources\Reports\TimeReport;
use BernskioldMedia\Harvest\Resources\Reports\UninvoicedReport;
use BernskioldMedia\Harvest\Resources\Role;
use BernskioldMedia\Harvest\Resources\Task;
use BernskioldMedia\Harvest\Resources\TimeEntry;
use BernskioldMedia\Harvest\Resources\User;
use BernskioldMedia\Harvest\Resources\UserBillableRate;
use BernskioldMedia\Harvest\Resources\UserCostRate;
use BernskioldMedia\Harvest\Resources\UserProjectAssignment;
use Illuminate\Support\Facades\Facade;

/**
 * @method static Client clients()
 * @method static ClientContact contacts()
 * @method static Company companies()
 * @method static Estimate estimates()
 * @method static EstimateItemCategory estimateItemCategories()
 * @method static EstimateMessage estimateMessages()
 * @method static Expense expenses()
 * @method static ExpenseCategory expenseCategories()
 * @method static Invoice invoices()
 * @method static InvoiceItemCategory invoiceItemCategories()
 * @method static InvoiceMessage invoiceMessages()
 * @method static InvoicePayments payments()
 * @method static Project project()
 * @method static ProjectTaskAssignment taskAssignments()
 * @method static UserProjectAssignment userAssignments()
 * @method static Role roles()
 * @method static Task tasks()
 * @method static TimeEntry timeEntries()
 * @method static User users()
 * @method static UserBillableRate billableRates()
 * @method static UserCostRate costRates()
 * @method static UserProjectAssignment projectAssignments()
 * @method static ExpenseReport expenseReport()
 * @method static ProjectBudgetReport budgetReport()
 * @method static TimeReport timeReport()
 * @method static UninvoicedReport uninvoicedReport()
 *
 * @see \BernskioldMedia\Harvest\Harvest
 */
class Harvest extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-harvest';
    }
}
