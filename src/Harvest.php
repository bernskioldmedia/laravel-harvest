<?php

namespace BernskioldMedia\Harvest;

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

class Harvest
{
    public function __construct(
        public HarvestClient $client,
    ) {
    }

    public function clients(): Client
    {
        return (new Client($this->client));
    }

    public function contacts(): ClientContact
    {
        return (new ClientContact($this->client));
    }

    public function companies(): Company
    {
        return (new Company($this->client));
    }

    public function estimates(): Estimate
    {
        return (new Estimate($this->client));
    }

    public function estimateItemCategories(): EstimateItemCategory
    {
        return (new EstimateItemCategory($this->client));
    }

    public function estimateMessages(): EstimateMessage
    {
        return (new EstimateMessage($this->client));
    }

    public function expenses(): Expense
    {
        return (new Expense($this->client));
    }

    public function expenseCategories(): ExpenseCategory
    {
        return (new ExpenseCategory($this->client));
    }

    public function invoices(): Invoice
    {
        return (new Invoice($this->client));
    }

    public function invoiceItemCategories(): InvoiceItemCategory
    {
        return (new InvoiceItemCategory($this->client));
    }

    public function invoiceMessages(): InvoiceMessage
    {
        return (new InvoiceMessage($this->client));
    }

    public function payments(): InvoicePayments
    {
        return (new InvoicePayments($this->client));
    }

    public function project(): Project
    {
        return (new Project($this->client));
    }

    public function taskAssignments(): ProjectTaskAssignment
    {
        return (new ProjectTaskAssignment($this->client));
    }

    public function userAssignments(): UserProjectAssignment
    {
        return (new UserProjectAssignment($this->client));
    }

    public function roles(): Role
    {
        return (new Role($this->client));
    }

    public function tasks(): Task
    {
        return (new Task($this->client));
    }

    public function timeEntries(): TimeEntry
    {
        return (new TimeEntry($this->client));
    }

    public function users(): User
    {
        return (new User($this->client));
    }

    public function billableRates(): UserBillableRate
    {
        return (new UserBillableRate($this->client));
    }

    public function costRates(): UserCostRate
    {
        return (new UserCostRate($this->client));
    }

    public function projectAssignments(): UserProjectAssignment
    {
        return (new UserProjectAssignment($this->client));
    }

    public function expenseReport(): ExpenseReport
    {
        return (new ExpenseReport($this->client));
    }

    public function budgetReport(): ProjectBudgetReport
    {
        return (new ProjectBudgetReport($this->client));
    }

    public function timeReport(): TimeReport
    {
        return (new TimeReport($this->client));
    }

    public function uninvoicedReport(): UninvoicedReport
    {
        return (new UninvoicedReport($this->client));
    }
}
