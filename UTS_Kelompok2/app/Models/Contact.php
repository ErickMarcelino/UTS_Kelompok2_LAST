<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="Contact",
 *     title="Contact",
 *     description="Contact model",
 *     @OA\Property(property="id", type="integer", format="int64", description="Contact ID"),
 *     @OA\Property(property="code", type="string", description="Contact code"),
 *     @OA\Property(property="name", type="string", description="Contact name"),
 *     @OA\Property(property="email", type="string", format="email", description="Contact email"),
 *     @OA\Property(property="phone", type="string", description="Contact phone"),
 *     @OA\Property(property="mobile", type="string", description="Contact mobile"),
 *     @OA\Property(property="street", type="string", description="Contact street"),
 *     @OA\Property(property="city", type="string", description="Contact city"),
 *     @OA\Property(property="state", type="string", description="Contact state"),
 *     @OA\Property(property="zip", type="string", description="Contact zip"),
 *     @OA\Property(property="country", type="string", description="Contact country"),
 *     @OA\Property(property="vat", type="string", description="Contact VAT"),
 *     @OA\Property(property="created_at", type="string", format="date-time", description="Date/time when the contact was created"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", description="Date/time when the contact was last updated"),
 * )
 *
 * @OA\Schema(
 *     schema="ContactRequest",
 *     title="ContactRequest",
 *     description="Contact request model",
 *     @OA\Property(property="code", type="string", description="Contact code"),
 *     @OA\Property(property="name", type="string", description="Contact name"),
 *     @OA\Property(property="email", type="string", format="email", description="Contact email"),
 *     @OA\Property(property="phone", type="string", description="Contact phone"),
 *     @OA\Property(property="mobile", type="string", description="Contact mobile"),
 *     @OA\Property(property="street", type="string", description="Contact street"),
 *     @OA\Property(property="city", type="string", description="Contact city"),
 *     @OA\Property(property="state", type="string", description="Contact state"),
 *     @OA\Property(property="zip", type="string", description="Contact zip"),
 *     @OA\Property(property="country", type="string", description="Contact country"),
 *     @OA\Property(property="vat", type="string", description="Contact VAT"),
 *     @OA\Property(property="created_at", type="string", format="date-time", description="Date/time when the contact was created"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", description="Date/time when the contact was last updated"),
 * )
 */
class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'email',
        'phone',
        'mobile',
        'street',
        'city',
        'state',
        'zip',
        'country',
        'vat',
    ];

    // Mutator to format the 'date' field
    public function setDateAttribute($value)
    {
        $this->attributes['date'] = date('Y-m-d H:i:s', strtotime($value));
    }

    // Accessor to retrieve the 'date' field in the desired format
    public function getDateAttribute($value)
    {
        return $value ? date('Y-m-d H:i:s', strtotime($value)) : null;
    }

    // Accessor to retrieve the 'created_at' field in the desired format
    public function getCreatedAtAttribute($value)
    {
        return $value ? date('Y-m-d H:i:s', strtotime($value)) : null;
    }

    // Accessor to retrieve the 'updated_at' field in the desired format
    public function getUpdatedAtAttribute($value)
    {
        return $value ? date('Y-m-d H:i:s', strtotime($value)) : null;
    }
}
