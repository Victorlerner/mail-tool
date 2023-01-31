<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace Domain\Automation\Models{
/**
 * Domain\Automation\Models\Automation
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Domain\Automation\Models\AutomationStep[] $steps
 * @property-read int|null $steps_count
 * @property-read \Domain\Shared\Models\User $user
 * @method static \Database\Factories\Automation\AutomationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Automation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Automation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Automation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Automation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Automation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Automation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Automation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Automation whereUserId($value)
 */
	class Automation extends \Eloquent {}
}

namespace Domain\Automation\Models{
/**
 * Domain\Automation\Models\AutomationStep
 *
 * @property int $id
 * @property int $automation_id
 * @property \Domain\Automation\Enums\AutomationStepType $type
 * @property string $name
 * @property array $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Domain\Automation\Models\Automation $automation
 * @method static \Database\Factories\Automation\AutomationStepFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|AutomationStep newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AutomationStep newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AutomationStep query()
 * @method static \Illuminate\Database\Eloquent\Builder|AutomationStep whereAutomationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AutomationStep whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AutomationStep whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AutomationStep whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AutomationStep whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AutomationStep whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AutomationStep whereValue($value)
 */
	class AutomationStep extends \Eloquent {}
}

namespace Domain\Mail\Models\Broadcast{
/**
 * Domain\Mail\Models\Broadcast\Broadcast
 *
 * @property int $id
 * @property int $user_id
 * @property string $subject
 * @property string $content
 * @property \Domain\Mail\DataTransferObjects\FilterData|null $filters
 * @property \Domain\Mail\Enums\Broadcast\BroadcastStatus $status
 * @property string|null $sent_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Domain\Mail\Models\SentMail[] $sent_mails
 * @property-read int|null $sent_mails_count
 * @property-read \Domain\Shared\Models\User $user
 * @method static \Database\Factories\Mail\BroadcastFactory factory(...$parameters)
 * @method static \Domain\Mail\Builders\Broadcast\BroadcastBuilder|Broadcast markAsSent()
 * @method static \Domain\Mail\Builders\Broadcast\BroadcastBuilder|Broadcast newModelQuery()
 * @method static \Domain\Mail\Builders\Broadcast\BroadcastBuilder|Broadcast newQuery()
 * @method static \Domain\Mail\Builders\Broadcast\BroadcastBuilder|Broadcast query()
 * @method static \Domain\Mail\Builders\Broadcast\BroadcastBuilder|Broadcast whereContent($value)
 * @method static \Domain\Mail\Builders\Broadcast\BroadcastBuilder|Broadcast whereCreatedAt($value)
 * @method static \Domain\Mail\Builders\Broadcast\BroadcastBuilder|Broadcast whereFilters($value)
 * @method static \Domain\Mail\Builders\Broadcast\BroadcastBuilder|Broadcast whereId($value)
 * @method static \Domain\Mail\Builders\Broadcast\BroadcastBuilder|Broadcast whereSentAt($value)
 * @method static \Domain\Mail\Builders\Broadcast\BroadcastBuilder|Broadcast whereStatus($value)
 * @method static \Domain\Mail\Builders\Broadcast\BroadcastBuilder|Broadcast whereSubject($value)
 * @method static \Domain\Mail\Builders\Broadcast\BroadcastBuilder|Broadcast whereUpdatedAt($value)
 * @method static \Domain\Mail\Builders\Broadcast\BroadcastBuilder|Broadcast whereUserId($value)
 */
	class Broadcast extends \Eloquent implements \Domain\Mail\Contracts\Sendable {}
}

namespace Domain\Mail\Models{
/**
 * Domain\Mail\Models\SentMail
 *
 * @property int $id
 * @property int $sendable_id
 * @property string $sendable_type
 * @property int|null $subscriber_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon $sent_at
 * @property string|null $opened_at
 * @property string|null $clicked_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $sendable
 * @property-read \Domain\Subscriber\Models\Subscriber|null $subscriber
 * @property-read \Domain\Shared\Models\User $user
 * @method static \Domain\Mail\Builders\SentMail\SentMailBuilder|SentMail countOf(\Domain\Mail\Contracts\Sendable $model)
 * @method static \Database\Factories\Mail\SentMailFactory factory(...$parameters)
 * @method static \Domain\Mail\Builders\SentMail\SentMailBuilder|SentMail newModelQuery()
 * @method static \Domain\Mail\Builders\SentMail\SentMailBuilder|SentMail newQuery()
 * @method static \Domain\Mail\Builders\SentMail\SentMailBuilder|SentMail query()
 * @method static \Domain\Mail\Builders\SentMail\SentMailBuilder|SentMail whereClicked()
 * @method static \Domain\Mail\Builders\SentMail\SentMailBuilder|SentMail whereClickedAt($value)
 * @method static \Domain\Mail\Builders\SentMail\SentMailBuilder|SentMail whereId($value)
 * @method static \Domain\Mail\Builders\SentMail\SentMailBuilder|SentMail whereOpened()
 * @method static \Domain\Mail\Builders\SentMail\SentMailBuilder|SentMail whereOpenedAt($value)
 * @method static \Domain\Mail\Builders\SentMail\SentMailBuilder|SentMail whereSendable(\Domain\Mail\Contracts\Sendable $sendable)
 * @method static \Domain\Mail\Builders\SentMail\SentMailBuilder|SentMail whereSendableId($value)
 * @method static \Domain\Mail\Builders\SentMail\SentMailBuilder|SentMail whereSendableType($value)
 * @method static \Domain\Mail\Builders\SentMail\SentMailBuilder|SentMail whereSentAt($value)
 * @method static \Domain\Mail\Builders\SentMail\SentMailBuilder|SentMail whereSequence(\Domain\Mail\Models\Sequence\Sequence $sequence)
 * @method static \Domain\Mail\Builders\SentMail\SentMailBuilder|SentMail whereSubscriberId($value)
 * @method static \Domain\Mail\Builders\SentMail\SentMailBuilder|SentMail whereUserId($value)
 */
	class SentMail extends \Eloquent {}
}

namespace Domain\Mail\Models\Sequence{
/**
 * Domain\Mail\Models\Sequence\Sequence
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property \Domain\Mail\Enums\Sequence\SequenceStatus $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Domain\Mail\Models\Sequence\SequenceMail[] $mails
 * @property-read int|null $mails_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Domain\Mail\Models\SentMail[] $sent_mails
 * @property-read int|null $sent_mails_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Domain\Subscriber\Models\Subscriber[] $subscribers
 * @property-read int|null $subscribers_count
 * @property-read \Domain\Shared\Models\User $user
 * @method static \Domain\Mail\Builders\Sequence\SequenceBuilder|Sequence activeSubscriberCount()
 * @method static \Domain\Mail\Builders\Sequence\SequenceBuilder|Sequence completedSubscriberCount()
 * @method static \Database\Factories\Mail\SequenceFactory factory(...$parameters)
 * @method static \Domain\Mail\Builders\Sequence\SequenceBuilder|Sequence inProgressSubscriberCount()
 * @method static \Domain\Mail\Builders\Sequence\SequenceBuilder|Sequence newModelQuery()
 * @method static \Domain\Mail\Builders\Sequence\SequenceBuilder|Sequence newQuery()
 * @method static \Domain\Mail\Builders\Sequence\SequenceBuilder|Sequence query()
 * @method static \Domain\Mail\Builders\Sequence\SequenceBuilder|Sequence whereCreatedAt($value)
 * @method static \Domain\Mail\Builders\Sequence\SequenceBuilder|Sequence whereId($value)
 * @method static \Domain\Mail\Builders\Sequence\SequenceBuilder|Sequence whereStatus($value)
 * @method static \Domain\Mail\Builders\Sequence\SequenceBuilder|Sequence whereTitle($value)
 * @method static \Domain\Mail\Builders\Sequence\SequenceBuilder|Sequence whereUpdatedAt($value)
 * @method static \Domain\Mail\Builders\Sequence\SequenceBuilder|Sequence whereUserId($value)
 */
	class Sequence extends \Eloquent {}
}

namespace Domain\Mail\Models\Sequence{
/**
 * Domain\Mail\Models\Sequence\SequenceMail
 *
 * @property int $id
 * @property int $sequence_id
 * @property int $user_id
 * @property string $subject
 * @property string $content
 * @property \Domain\Mail\Enums\Sequence\SequenceMailStatus $status
 * @property \Domain\Mail\DataTransferObjects\FilterData|null $filters
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Domain\Mail\Models\Sequence\SequenceMailSchedule|null $schedule
 * @property-read \Illuminate\Database\Eloquent\Collection|\Domain\Mail\Models\SentMail[] $sent_mails
 * @property-read int|null $sent_mails_count
 * @property-read \Domain\Mail\Models\Sequence\Sequence $sequence
 * @property-read \Domain\Shared\Models\User $user
 * @method static \Database\Factories\Mail\SequenceMailFactory factory(...$parameters)
 * @method static \Domain\Mail\Builders\Sequence\SequenceMailBuilder|SequenceMail newModelQuery()
 * @method static \Domain\Mail\Builders\Sequence\SequenceMailBuilder|SequenceMail newQuery()
 * @method static \Domain\Mail\Builders\Sequence\SequenceMailBuilder|SequenceMail query()
 * @method static \Domain\Mail\Builders\Sequence\SequenceMailBuilder|SequenceMail whereContent($value)
 * @method static \Domain\Mail\Builders\Sequence\SequenceMailBuilder|SequenceMail whereCreatedAt($value)
 * @method static \Domain\Mail\Builders\Sequence\SequenceMailBuilder|SequenceMail whereFilters($value)
 * @method static \Domain\Mail\Builders\Sequence\SequenceMailBuilder|SequenceMail whereId($value)
 * @method static \Domain\Mail\Builders\Sequence\SequenceMailBuilder|SequenceMail wherePublished()
 * @method static \Domain\Mail\Builders\Sequence\SequenceMailBuilder|SequenceMail whereSequenceId($value)
 * @method static \Domain\Mail\Builders\Sequence\SequenceMailBuilder|SequenceMail whereStatus($value)
 * @method static \Domain\Mail\Builders\Sequence\SequenceMailBuilder|SequenceMail whereSubject($value)
 * @method static \Domain\Mail\Builders\Sequence\SequenceMailBuilder|SequenceMail whereUpdatedAt($value)
 * @method static \Domain\Mail\Builders\Sequence\SequenceMailBuilder|SequenceMail whereUserId($value)
 */
	class SequenceMail extends \Eloquent implements \Domain\Mail\Contracts\Sendable {}
}

namespace Domain\Mail\Models\Sequence{
/**
 * Domain\Mail\Models\Sequence\SequenceMailSchedule
 *
 * @property int $id
 * @property int $sequence_mail_id
 * @property int $delay
 * @property \Domain\Mail\Enums\Sequence\SequenceMailUnit $unit
 * @property $allowed_days
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Domain\Mail\Models\Sequence\SequenceMail $sequence_mail
 * @method static \Database\Factories\Mail\SequenceMailScheduleFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|SequenceMailSchedule newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SequenceMailSchedule newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SequenceMailSchedule query()
 * @method static \Illuminate\Database\Eloquent\Builder|SequenceMailSchedule whereAllowedDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SequenceMailSchedule whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SequenceMailSchedule whereDelay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SequenceMailSchedule whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SequenceMailSchedule whereSequenceMailId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SequenceMailSchedule whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SequenceMailSchedule whereUpdatedAt($value)
 */
	class SequenceMailSchedule extends \Eloquent {}
}

namespace Domain\Mail\Models\Sequence{
/**
 * Domain\Mail\Models\Sequence\SequenceSubscriber
 *
 * @property int $id
 * @property int $sequence_id
 * @property int $subscriber_id
 * @property string $subscribed_at
 * @property \Domain\Mail\Enums\Sequence\SubscriberStatus|null $status
 * @property-read \Domain\Mail\Models\Sequence\Sequence $sequence
 * @property-read \Domain\Subscriber\Models\Subscriber $subscriber
 * @method static \Illuminate\Database\Eloquent\Builder|SequenceSubscriber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SequenceSubscriber newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SequenceSubscriber query()
 * @method static \Illuminate\Database\Eloquent\Builder|SequenceSubscriber whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SequenceSubscriber whereSequenceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SequenceSubscriber whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SequenceSubscriber whereSubscribedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SequenceSubscriber whereSubscriberId($value)
 */
	class SequenceSubscriber extends \Eloquent {}
}

namespace Domain\Shared\Models{
/**
 * Domain\Shared\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\Shared\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace Domain\Subscriber\Models{
/**
 * Domain\Subscriber\Models\Form
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Domain\Shared\Models\User $user
 * @method static \Database\Factories\Subscriber\FormFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Form newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Form newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Form query()
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereUserId($value)
 */
	class Form extends \Eloquent {}
}

namespace Domain\Subscriber\Models{
/**
 * Domain\Subscriber\Models\Subscriber
 *
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property string $first_name
 * @property string|null $last_name
 * @property int|null $form_id
 * @property string $subscribed_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Domain\Mail\Models\Broadcast\Broadcast[] $broadcasts
 * @property-read int|null $broadcasts_count
 * @property-read \Domain\Subscriber\Models\Form|null $form
 * @property-read \Domain\Mail\Models\SentMail $last_received_mail
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Domain\Mail\Models\SentMail[] $received_mails
 * @property-read int|null $received_mails_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Domain\Mail\Models\SentMail[] $sent_mails
 * @property-read int|null $sent_mails_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Domain\Mail\Models\Sequence\Sequence[] $sequences
 * @property-read int|null $sequences_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Domain\Subscriber\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @property-read \Domain\Shared\Models\User $user
 * @method static \Domain\Subscriber\Builders\SubscriberBuilder|Subscriber alreadyReceived(\Domain\Mail\Models\Sequence\SequenceMail $mail)
 * @method static \Database\Factories\Subscriber\SubscriberFactory factory(...$parameters)
 * @method static \Domain\Subscriber\Builders\SubscriberBuilder|Subscriber newModelQuery()
 * @method static \Domain\Subscriber\Builders\SubscriberBuilder|Subscriber newQuery()
 * @method static \Domain\Subscriber\Builders\SubscriberBuilder|Subscriber query()
 * @method static \Domain\Subscriber\Builders\SubscriberBuilder|Subscriber whereCreatedAt($value)
 * @method static \Domain\Subscriber\Builders\SubscriberBuilder|Subscriber whereEmail($value)
 * @method static \Domain\Subscriber\Builders\SubscriberBuilder|Subscriber whereFirstName($value)
 * @method static \Domain\Subscriber\Builders\SubscriberBuilder|Subscriber whereFormId($value)
 * @method static \Domain\Subscriber\Builders\SubscriberBuilder|Subscriber whereId($value)
 * @method static \Domain\Subscriber\Builders\SubscriberBuilder|Subscriber whereLastName($value)
 * @method static \Domain\Subscriber\Builders\SubscriberBuilder|Subscriber whereSubscribedAt($value)
 * @method static \Domain\Subscriber\Builders\SubscriberBuilder|Subscriber whereSubscribedBetween(\Domain\Shared\Filters\DateFilter $dateFilter)
 * @method static \Domain\Subscriber\Builders\SubscriberBuilder|Subscriber whereUpdatedAt($value)
 * @method static \Domain\Subscriber\Builders\SubscriberBuilder|Subscriber whereUserId($value)
 */
	class Subscriber extends \Eloquent {}
}

namespace Domain\Subscriber\Models{
/**
 * Domain\Subscriber\Models\Tag
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Domain\Subscriber\Models\Subscriber[] $subscribers
 * @property-read int|null $subscribers_count
 * @property-read \Domain\Shared\Models\User $user
 * @method static \Database\Factories\Subscriber\TagFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereUserId($value)
 */
	class Tag extends \Eloquent {}
}

